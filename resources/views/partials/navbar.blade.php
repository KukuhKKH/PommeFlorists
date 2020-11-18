<div class="art-bar art-nav">
   <div class="art-nav-outer">
      <ul class="art-hmenu">
         <li>
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' :'' }}">Home</a>
         </li>
         <li>
            <a href="#" class="{{ request()->segment(1) == 'profil' ? 'active' :'' }}">Profil</a>
            <ul>
               <li><a href="{{ route('profil.perusahaan') }}">Tentang Perusahaan</a></li>
               <li><a href="{{ route('profil.visi') }}">Visi</a></li>
               <li><a href="{{ route('profil.misi') }}">Misi</a></li>
            </ul>
         </li>
         <li>
            <a href="#" class="{{ request()->segment(1) == 'our-service' ? 'active' :'' }}">Our Service</a>
            <ul>
               <li><a href="{{ route('our-service.anniversary') }}">Anniversary</a></li>
               <li><a href="{{ route('our-service.birthday') }}">Birthday</a></li>
               <li><a href="{{ route('our-service.graduation') }}">Graduation</a></li>
               <li><a href="{{ route('our-service.weeding') }}">Weeding</a></li>
            </ul>
         </li>
         <li>
            <a href="#" class="{{ request()->segment(1) == 'kategori-bunga' ? 'active' :'' }}">Kategori Bunga</a>
            <ul>
               <li><a href="{{ route('kategori-bunga.head-bucket') }}">Head Bucket</a></li>
               <li><a href="{{ route('kategori-bunga.bunga-meja') }}">Bunga Meja</a></li>
               <li><a href="{{ route('kategori-bunga.bunga-kering') }}">Bunga Kering</a></li>
               <li><a href="{{ route('kategori-bunga.bunga-papan') }}">Bunga Papan</a></li>
            </ul>
         </li>
         <li>
            <a href="#">Pengiriman</a>
            <ul>
               <li>
                  <a href="{{ route('pengiriman.jne') }}">JNE</a>
                  <a href="{{ route('pengiriman.jnt') }}">J&T</a>
                  <a href="{{ route('pengiriman.cepat') }}">Si Cepat</a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('kontak') }}">Contact Us</a>
         </li>
      </ul>
   </div>
</div>