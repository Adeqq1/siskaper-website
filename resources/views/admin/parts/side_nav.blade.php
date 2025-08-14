<div class="sidebar-wrapper scrollbar scrollbar-inner">
  <div class="sidebar-content">
    <ul class="nav nav-secondary">

      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section display-4 " style="color: #FF800F;">Powered by KKN UMMUBA 2025</h4>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#sotk">
          <i class="fas fa-th-list"></i>
          <p>SOTK</p>
          <span class="caret"></span>
        </a>
        <div class="collapse" id="sotk">
          <ul class="nav nav-collapse">
            <li>
              <a href="{{ route('sotk.index')}}">
                <span class="sub-item">Manajemen SOTK</span>
              </a>
            </li>
            <li>
              <a href="{{ route('sotk.create')}}">
                <span class="sub-item">Tambahkan SOTK</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#statistikPenduduk">
          <i class="fas fa-pen-square"></i>
          <p>Statistik Penduduk</p>
          <span class="caret"></span>
        </a>
        <div class="collapse" id="statistikPenduduk">
          <ul class="nav nav-collapse">
            <li>
              <a href="{{ route('stat-penduduk.index')}}">
                <span class="sub-item">Manajemen Stat Penduduk</span>
              </a>
            </li>
            <li>
              <a href="{{ route('stat-penduduk.create')}}">
                <span class="sub-item">Tambahkan Stat Penduduk</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a data-bs-toggle="collapse" href="#apbdDesa">
          <i class="fas fa-table"></i>
          <p>APBD Desa</p>
          <span class="caret"></span>
        </a>
        <div class="collapse" id="apbdDesa">
          <ul class="nav nav-collapse">
            <li>
              <a href="{{ route('apbd-desa.index')}}">
                <span class="sub-item">Manajemen APBD Desa</span>
              </a>
            </li>
            <li>
              <a href="{{ route('apbd-desa.create')}}">
                <span class="sub-item">Tambahkan APBD Desa</span>
              </a>
            </li>
          </ul>
        </div>
      </li> -->
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#berita">
          <i class="fas fa-map-marker-alt"></i>
          <p>Berita</p>
          <span class="caret"></span>
        </a>
        <div class="collapse" id="berita">
          <ul class="nav nav-collapse">
            <li>
              <a href="{{ route('berita_admin.index')}}">
                <span class="sub-item">Manajemen Berita</span>
              </a>
            </li>
            <li>
              <a href="{{ route('berita_admin.create')}}">
                <span class="sub-item">Tambahkan Berita</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#produkDesa">
          <i class="far fa-chart-bar"></i>
          <p>Produk Desa</p>
          <span class="caret"></span>
        </a>
        <div class="collapse" id="produkDesa">
          <ul class="nav nav-collapse">
            <li>
              <a href="{{ route('produk-desa.index')}}">
                <span class="sub-item">Manajemen Produk Desa</span>
              </a>
            </li>
            <li>
              <a href="{{ route('produk-desa.create')}}">
                <span class="sub-item">Tambahkan Produk Desa</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a data-bs-toggle="collapse" href="#galeriDesa">
          <i class="far fa-chart-bar"></i>
          <p>Galeri Desa</p>
          <span class="caret"></span>
        </a>
        <div class="collapse" id="galeriDesa">
          <ul class="nav nav-collapse">
            <li>
              <a href="{{ route('galeri-desa.index')}}">
                <span class="sub-item">Manajemen Galeri Desa</span>
              </a>
            </li>
            <li>
              <a href="{{ route('galeri-desa.create')}}">
                <span class="sub-item">Tambahkan Galeri Desa</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

    </ul>
  </div>
</div>