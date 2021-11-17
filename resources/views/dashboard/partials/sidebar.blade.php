<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand p-1" href="/">
                <img src="{{ argon('assets/img/dashboard.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                @if ($title === 'Akademik')
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">
                                <i class="fas fa-home text-green"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $subTitle === 'Mahasiswa' ? 'active' : '' }}" href="#mahasiswa"
                                data-toggle="collapse" role="button"
                                aria-expanded="{{ $subTitle === 'Mahasiswa' ? 'true' : '' }}"
                                aria-controls="mahasiswa">
                                <i class="fas fa-user-graduate text-red"></i>
                                <span class="nav-link-text">Mahasiswa</span>
                            </a>
                            <div class="collapse {{ $subTitle === 'Mahasiswa' ? 'show' : '' }}" id="mahasiswa">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Mahasiswa Aktif' ? '#' : route('mahasiswaAktif') }}"
                                            class="nav-link {{ $subTitle2 === 'Mahasiswa Aktif' ? 'active' : '' }}">
                                            Mahasiswa Aktif</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Sebaran Mahasiswa' ? '#' : route('sebaranMahasiswa') }}"
                                            class="nav-link {{ $subTitle2 === 'Sebaran Mahasiswa' ? 'active' : '' }}">
                                            Sebaran Mahasiswa</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $subTitle === 'Lulusan' ? 'active' : '' }}"
                                href="{{ $subTitle2 === 'Lulusan' ? '#' : route('lulusan') }}">
                                <i class="fas fa-graduation-cap text-blue"></i>
                                <span class="nav-link-text">Lulusan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $subTitle === 'maba' ? 'active' : '' }}" href="#mahasiswaBaru"
                                data-toggle="collapse" role="button"
                                aria-expanded="{{ $subTitle === 'maba' ? 'true' : '' }}"
                                aria-controls="mahasiswaBaru">
                                <i class="fas fa-user-plus text-orange"></i>
                                <span class="nav-link-text">Mahasiswa Baru</span>
                            </a>
                            <div class="collapse {{ $subTitle === 'maba' ? 'show' : '' }}" id="mahasiswaBaru">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Peminat' ? '#' : route('maba', ['slug' => 'peminat']) }}"
                                            class="nav-link {{ $subTitle2 === 'Peminat' ? 'active' : '' }}">Peminat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Pendaftar' ? '#' : route('maba', ['slug' => 'pendaftar']) }}"
                                            class="nav-link {{ $subTitle2 === 'Pendaftar' ? 'active' : '' }}">Pendaftar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Lulus Seleksi' ? '#' : route('maba', ['slug' => 'lulusSeleksi']) }}"
                                            class="nav-link {{ $subTitle2 === 'Lulus Seleksi' ? 'active' : '' }}">Lulus
                                            Seleksi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Registrasi' ? '#' : route('maba', ['slug' => 'registrasi']) }}"
                                            class="nav-link {{ $subTitle2 === 'Registrasi' ? 'active' : '' }}">Registrasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Rekap' ? '#' : route('maba', ['slug' => 'rekap']) }}"
                                            class="nav-link {{ $subTitle2 === 'Rekap' ? 'active' : '' }}">Rekap</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>


                @elseif($title === 'SDM')

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">
                                <i class="fas fa-home text-green"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $subTitle === 'Kualifikasi' ? 'active' : '' }}"
                                href="{{ $subTitle === 'Kualifikasi' ? '#' : route('SDM', ['slug' => 'kualifikasi']) }}">
                                <i class="fas fa-users text-red"></i>
                                <span class="nav-link-text">Kualifikasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $subTitle === 'Golongan' ? 'active' : '' }}"
                                href="{{ $subTitle === 'Golongan' ? '#' : route('SDM', ['slug' => 'golongan']) }}">
                                <i class="fas fa-id-card-alt text-blue"></i>
                                <span class="nav-link-text">Golongan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $subTitle === 'Jabatan Fungsional' ? 'active' : '' }}"
                                href="{{ $subTitle === 'Jabatan Fungsional' ? '#' : route('SDM', ['slug' => 'jabatanFungsional']) }}">
                                <i class="fas fa-briefcase text-orange"></i>
                                <span class="nav-link-text">Jabatan Fungsional</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $subTitle === 'Usia' ? 'active' : '' }}"
                                href="{{ $subTitle === 'Usia' ? '#' : route('SDM', ['slug' => 'usia']) }}">
                                <i class="fas fa-calendar-day text-info"></i>
                                <span class="nav-link-text">Usia</span>
                            </a>
                        </li>
                    </ul>

                @elseif($title === 'Akreditasi Program Studi')

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">
                                <i class="fas fa-home text-green"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'Akreditasi Program Studi' ? 'active' : '' }}"
                                href="#mahasiswa" data-toggle="collapse" role="button"
                                aria-expanded="{{ $title === 'Akreditasi Program Studi' ? 'true' : '' }}"
                                aria-controls="mahasiswa">
                                <i class="fas fa-school text-red"></i>
                                <span class="nav-link-text">Akreditasi</span>
                            </a>
                            <div class="collapse {{ $title === 'Akreditasi Program Studi' ? 'show' : '' }}"
                                id="mahasiswa">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Fakultas' ? '#' : route('akreditasiUniversitas') }}"
                                            class="nav-link {{ $subTitle2 === 'Fakultas' ? 'active' : '' }}">
                                            Universitas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ $subTitle2 === 'Prodi' ? '#' : route('akreditasiFakultas') }}"
                                            class="nav-link {{ $subTitle2 === 'Prodi' ? 'active' : '' }}">
                                            Fakultas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                @endif
            </div>
        </div>
    </div>
</nav>
