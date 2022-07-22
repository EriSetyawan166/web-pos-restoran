@foreach ($data as $td)

                                <div class="d-flex justify-content-between">
                                    <h4>{{$td->jumlah}}</h4>
                                    <h4 class="text-success">Rp{{number_format($td->harga_satuan*$td->jumlah)}}</h4>
                                </div>
                                <div class="d-flex justify-content-center pt-2">
                                    <div class="col">
                                        <img src="{{asset('upload/foto_produk')}}/{{$td->produk->foto_produk}}" alt="" style="width: 120px">
                                        <div class="d-flex justify-content-between pt-2 " style="width: 120px">

                                                <button class="" style="background-color: transparent;border-color: transparent;width: 11%"><a  href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                                                    class="fas fa-trash-alt text-danger " data-toggle="modal" data-target="#hapus_produkhp{{$td->produk->id_produk}}"></i></a></button>

                                                    @if ($td->jumlah ==1)
                                                    <button class="" style="background-color: transparent;border-color: transparent;width: 11%" ><a onclick="return false" href="{{url('warung/keranjang-kurang')}}/{{$td->produk_id}}" data-mdb-toggle="tooltip" title="Remove"><i
                                                        class="fas fa-minus text-danger"></i></a></button>
                                                    @else
                                                    <button id="{{$td->produk_id}}"   onclick="id_kurang(this.id)" style="background-color: transparent;border-color: transparent;width: 11%" ><a data-mdb-toggle="tooltip" title="Remove"><i
                                                        class="fas fa-minus text-danger"></i></a></button>
                                                    @endif

                                                <button id="{{$td->produk_id}}"   onclick="id_tambah(this.id)" style="background-color: transparent;border-color: transparent;"> <a  data-mdb-toggle="tooltip" title="Done"><i
                                                    class="fas fa-add text-success "></i></a></button>

                                        </div>
                                    </div>
                                    <h6 class="ps-2" style="text-align: right">{{$td->produk->nama_produk}}</h6>
                                </div>
                                <hr>
                                @endforeach
