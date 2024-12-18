<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuestionnaireController extends Controller
{
    public function viewQuesionnaire()
    {
        $response = Answer::where('user_id', auth()->id())->first();
        if ($response) {
            return redirect()->route('home')->with('error', 'Anda sudah mengisi kuisioner');
        }

        return view('questionnaire.identity');
    }

    public function storeStatus(Request $request)
    {
        // Ambil status yang dipilih
        $status = $request->status;
        $response = Answer::where('user_id', auth()->id())->first();
        if ($response) {
            return redirect()->route('home')->with('error', 'Anda sudah mengisi kuisioner');
        }

        if ($status == 'Bekerja') {
            return redirect()->route('questionnaire.form-bekerja');  // Halaman jika memilih Bekerja
        }

        // Tambahkan logika untuk status lainnyac
        if ($status == 'Belum memungkinkan bekerja') {
            return redirect()->route('questionnaire.form-belum-bekerja');  // Halaman untuk status ini
        }

        if ($status == 'Wiraswasta') {
            return redirect()->route('questionnaire.form-wiraswasta');  // Halaman untuk wiraswasta
        }

        if ($status == 'Melanjutkan Pendidikan') {
            return redirect()->route('questionnaire.form-melanjutkan-pendidikan');  // Halaman untuk pendidikan
        }

        if ($status == 'Tidak kerja tetapi sedang mencari kerja') {
            return redirect()->route('questionnaire.form-mencari-kerja');  // Halaman untuk status ini
        }
    }

    public function viewBekerja()
    {
        // return view('questionnaire.form-bekerja');
        $questionnaire = Survey::where('type', 'bekerja')->first();
        return view('questionnaire.form', compact('questionnaire'));
    }

    public function viewBelumBekerja()
    {
        // return view('questionnaire.form-belum-bekerja');
        $questionnaire = Survey::where('type', 'belum bekerja')->first();
        return view('questionnaire.form', compact('questionnaire'));
    }

    public function viewWiraswasta()
    {
        // return view('questionnaire.form-wiraswasta');
        $questionnaire = Survey::where('type', 'wiraswasta')->first();
        return view('questionnaire.form', compact('questionnaire'));
    }

    public function viewMelanjutkanPendidikan()
    {
        // return view('questionnaire.form-melanjutkan-pendidikan');
        $questionnaire = Survey::where('type', 'melanjutkan pendidikan')->first();
        return view('questionnaire.form', compact('questionnaire'));
    }

    public function viewMencariKerja()
    {
        // return view('questionnaire.form-mencari-kerja');
        $questionnaire = Survey::where('type', 'mencari kerja')->first();
        return view('questionnaire.form', compact('questionnaire'));
    }

    public function submit(Request $request)
    {
        DB::beginTransaction();
        try {
            foreach ($request->question as $questionId => $questionValue) {
                if (is_array($questionValue)) {
                    $questionValue = implode(', ', $questionValue);
                }
                $fieldAnswer = [
                    'user_id' => Auth::id(),
                    'survey_id' => $request->survey_id,
                    'question_id' => $questionId,
                    'answer' => $questionValue,
                ];
                Answer::create($fieldAnswer);
            }
            DB::commit();
            return redirect()->route('home')->with('success', 'Data berhasil disimpan');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan data');
        }
    }
}