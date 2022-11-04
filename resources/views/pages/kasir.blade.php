@extends('layouts.main')
@section('content')
<div class="toko mb-3" style="margin-top: 100px;">
        <center>
            <h3>Toko Baju Pusaka Jaya</h3>
        </center>
    </div>
    <div class="container">
        <div class="card mt-4 mb-4">
            <div class="card-header">
                <center>
                    <h4>Kasir Toko Baju</h4>
                </center>
            </div>
            <div class="card-body shadow">
                <form action="/kasir" method="" class="needs-validation" novalidate>
                <div class="border-0" >
                    <table class="table table-responsive border-0" style="border: none;" id="table">
                        <thead class="thead-dark">
                            <tr class="border-0">
                                <th>No</th>
                                <th>Jenis Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah Beli</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-light border-0">
                            <tr class="data border-0">
                                <td>1</td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="kategory" id="kategory">
                                            <option value="celana">Celana</option>
                                            <option value="kaos">Kaos</option>
                                            <option value="jaket">Jaket</option>
                                        </select>
                                    </div>
                                </td>
                                <td><div class="input-group">
                                    <input type="text" class="form-control" required>
                                    <div class="invalid-tooltip">
                                        Masukan Nama Barang !
                                    </div>
                                </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">Rp.</span>
                                        </div>
                                        <input type="number" class="form-control" id="harga" aria-describedby="validationTooltipUsernamePrepend" required>
                                        <div class="invalid-tooltip">
                                            Masukan Harga Barang !
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">,00</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                                        <div class="invalid-tooltip">
                                            Masukan Jumlah barang !
                                        </div>
                                    </div>  
                                </td>
                                <td><div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="phoneprepend">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" id="total" aria-describedby="validationTooltipUsernamePrepend" readonly>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="phoneprepend">,00</span>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr class="data">
                                <td>2</td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="kategory" id="kategory">
                                            <option value="celana">Celana</option>
                                            <option value="kaos">Kaos</option>
                                            <option value="jaket">Jaket</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" required>
                                        <div class="invalid-tooltip">
                                            Masukan Nama Barang !
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">Rp.</span>
                                        </div>
                                        <input type="number" class="form-control" id="harga1" aria-describedby="validationTooltipUsernamePrepend" required>
                                        <div class="invalid-tooltip">
                                            Masukan Harga Barang !
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">,00</span>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="input-group">
                                    <input type="number" name="jumlah" id="jumlah1" class="form-control" required>
                                    <div class="invalid-tooltip">
                                        Masukan Jumlah barang !
                                    </div>
                                </div> 
                                </td>
                                <td><div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="phoneprepend">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" id="total1" aria-describedby="validationTooltipUsernamePrepend" readonly>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="phoneprepend">,00</span>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>TOTAL</td>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">Rp.</span>
                                        </div>
                                    <input type="number" name="totalsemua" id="totalsemua" class="form-control" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>DISCOUNT</td>
                                <td>
                                    <div class="input-group">
                                    <input type="number" name="diskon" id="diskon" class="form-control" readonly>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">%</span>
                                        </div>
                                    </div>
                                </td>   
                            </tr>
                            <tr>
                                <td>TOTAL BAYAR</td>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">Rp.</span>
                                        </div>
                                    <input type="number" name="totalbayar" id="totalbayar" class="form-control"  readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>BAYAR</td>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phoneprepend">Rp.</span>
                                        </div>
                                    <input type="number" name="bayar" id="bayar" class="form-control rupiah" required>
                                    <div class="invalid-tooltip">
                                        Masukan Uang yang anda bayar !
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="submit" class="btn btn-success" id="btntotal">Bayar</button>
                                    <button type="reset" class="btn btn-danger" id="btnreset">Reset</button></td>
                            </tr>
                        </tbody>
                    </form>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
@endsection