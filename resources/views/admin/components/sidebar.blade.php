<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="{{ route('dashboard') }}">
        <i class="ri-dashboard-3-line"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('data.questionnaire') }}">
          <i class="bi bi-card-list"></i>
          <span>Data Kuisioner</span>
        </a>
      </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('data.responden') }}">
        <i class="bi bi-card-list"></i>
        <span>Data Responden</span>
      </a>
    </li><!-- End Register Page Nav --> 

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('data.unduh')}}">
        <i class="ri-download-2-fill"></i>
        <span>Unduh Data</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('user.survey')}}">
        <i class="ri-account-pin-circle-line"></i>
        <span>User Survey</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('data.panduan')}}">
        <i class="bi bi-journal-text"></i>
        <span>Panduan Form</span>
      </a>
    </li>
    <li class="nav-heading">Other</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('data.faq')}}">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->
  </ul>
</aside>
