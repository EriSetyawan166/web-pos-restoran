<table class="table mb-0">
    <thead>
      <tr>
        <th scope="col">Nama Menu</th>
        <th scope="col">Kategori</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Harga satuan</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $td)
      <tr class="fw-normal">
          <th>
            <img src="{{asset('upload/foto_produk')}}/{{$td->produk->foto_produk}}"
              class="shadow-1-strong " alt="avatar 1"
              style="width: 55px; height: auto;">
            <span class="ms-2">{{$td->produk->nama_produk}}</span>
          </th>
          <td class="align-middle">
            <span>{{$td->produk->kategori->nama_kategori}}</span>
          </td>
          <td class="align-middle">
            <h6 class="mb-0">{{$td->jumlah}}</h6>
          </td>
          <td class="align-middle">
            <h6 class="mb-0">Rp{{number_format($td->harga_satuan)}}</h6>
          </td>


          <td class="align-middle">

            <a  data-mdb-toggle="tooltip" title="Remove"><i
                class="fas fa-trash-alt text-danger me-3" data-toggle="modal" data-target="#hapus_produkpc{{$td->produk->id_produk}}"></i></a>
                @if ($td->jumlah == 1)
                <button  style="background-color: transparent;border-color: transparent"><a onclick="return false" data-mdb-toggle="tooltip" title="Remove"><i
                  class="fas fa-minus text-danger me-3"></i></a></button>

                  @else
                  <button id="{{$td->produk_id}}"   onclick="id_kurang(this.id)"  style="background-color: transparent;border-color: transparent"><a data-mdb-toggle="tooltip" title="Remove"><i
                      class="fas fa-minus text-danger me-3"></i></a></button>
                @endif

               <button id="{{$td->produk_id}}"   onclick="id_tambah(this.id)" style="background-color: transparent;border-color: transparent"> <a   data-mdb-toggle="tooltip" title="Done"><i
                    class="fas fa-add text-success me-3"></i></a></button>



          </td>

        </tr>
      @endforeach
      </tbody>
</table>
