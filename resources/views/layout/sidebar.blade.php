<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Sim<span class="text-danger">Aset</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Home Dashboard</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['statistik']) }}">
            <a href="{{route('statistik')}}" class="nav-link">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Statistik</span>
            </a>
        </li>
      <li class="nav-item nav-category">web apps</li>
      <li class="nav-item {{ active_class(['data-asset/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#data-asset" role="button" aria-expanded="{{ is_active_route(['data-asset/*']) }}" aria-controls="data-asset">
          <i class="link-icon" data-feather="folder"></i>
          <span class="link-title">Data Asset</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['data-asset/*']) }}" id="data-asset">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('data-asset.create') }}" class="nav-link {{ active_class(['data-asset/entri-data']) }}">Entri Data</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('data-asset.index') }}" class="nav-link {{ active_class(['data-asset/data-detail']) }}">Data Detail</a>
              {{-- <a href="{{ url('admin/data-asset/data-detail') }}" class="nav-link {{ active_class(['data-asset/data-detail']) }}">Data Detail</a> --}}
            </li>
            <li class="nav-item">
              <a href="{{  route('penyusutan-asset.index') }}" class="nav-link {{ active_class(['data-asset/penyusutan-aset']) }}">Penyusutan Asset</a>
            </li>
          </ul>
        </div>
      </li>


     <li class="nav-item {{ active_class(['admin/pustaka-*-aset']) }}">
        <a class="nav-link" data-toggle="collapse" href="#pustaka" role="button" aria-expanded="{{ is_active_route(['admin/pustaka-*-aset']) }}" aria-controls="pustaka">
          <i class="link-icon" data-feather="book"></i>
          <span class="link-title">Pustaka</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['admin/pustaka-*-aset']) }}" id="pustaka">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('pustaka-kategori-aset.index')}}" class="nav-link {{ active_class(['/pustaka-kategori-aset']) }}">Kategori Asset</a>
            </li>
            <li class="nav-item">
              <a href="{{route('pustaka-lokasi-aset.index')}}" class="nav-link {{ active_class(['/pustaka-lokasi-aset']) }}">Lokasi Asset</a>
            </li>
          </ul>
        </div>
      </li>


      {{-- <li class="nav-item {{ active_class(['laporan/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#laporan" role="button" aria-expanded="{{ is_active_route(['laporan/*']) }}" aria-controls="laporan"> --}}

          <li class="nav-item {{ active_class(['laporan-data-aset']) }}">
            <a href="{{route('laporan-data-aset')}}" class="nav-link">
              <i class="link-icon" data-feather="archive"></i>
              <span class="link-title">Laporan</span>
            </a>
          </li>
          
      {{-- <li class="nav-item {{ active_class(['apps/pengaturan']) }}">
        <a href="{{ url('/apps/pengaturan') }}" class="nav-link"> --}}

@if(Auth::user()->roles == 'admin')
      <li class="nav-item {{ active_class(['admin/pengaturan/*']) }}">
        <a  class="nav-link" data-toggle="collapse" href="#pengaturan" role="button" aria-expanded="{{ is_active_route(['admin/pengaturan/*']) }}" aria-controls="pengaturan">

          <i class="link-icon mdi mdi-code-greater-than-or-equal" data-feather="settings"></i>
          <span class="link-title">Pengaturan</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['admin/pengaturan/*']) }}" id="pengaturan">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('pengaturan/satuan-kerja')}}" class="nav-link {{ active_class(['admin/pengaturan/satuan-kerja']) }}">Satuan Kerja</a>
            </li>
            <li class="nav-item">
              <a href="{{url('pengaturan/management-user')}}" class="nav-link {{ active_class(['admin/pengaturan/management-user']) }}">Management User</a>
            </li>
          </ul>
        </div>
      </li>
@endif
    </ul>
  </div>
</nav>
<nav class="settings-sidebar">
  <div class="sidebar-body">
    <a href="#" class="settings-sidebar-toggler">
      <i data-feather="settings"></i>
    </a>
    <h6 class="text-muted">Sidebar:</h6>
    <div class="form-group border-bottom">
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          Light
        </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          Dark
        </label>
      </div>
    </div>

  </div>
</nav>
