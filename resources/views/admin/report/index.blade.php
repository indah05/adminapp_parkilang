@extends('layouts.admin-master')

@section('title')
Waiting
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Laporan Repot</h1>
  </div>
  <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Report</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>No</th>
                          <th>Pelapor</th>
                          <th>Deskripsi</th>
                          <th>Foto</th>
                          <th>Alamat</th>
                          <th>Tanggal Post</th>
                          <th>Dukung</th>
                          <th>Status</th>
                          <th>Detail</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td></td>
                          <td>Jalan Bunga Cengkeh no 104</td>
                          <td>2017-01-09</td>
                          <td>9</td>
                          <td><div class="badge badge-danger">Report</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Saya Budi</td>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td></td>
                          <td>Jalan Bunga Andong</td>
                          <td>2017-01-09</td>
                          <td>9</td>
                          <td><div class="badge badge-danger">Report</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Budi Saya</td>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td></td>
                          <td>Jalan Bunga Sonngolangit</td>
                          <td>2017-01-09</td>
                          <td>9</td>
                          <td><div class="badge badge-danger">Report</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Velien Vinadha</td>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td></td>
                          <td>Jalan Bunga Kaktus</td>
                          <td>2017-01-09</td>
                          <td>9</td>
                          <td><div class="badge badge-danger">Report</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Fernada yerisha </td>
                          <td>Lorem ipsum dolor sit amet</td>
                          <td></td>
                          <td>Jalan Bunga Cengkeh no 104</td>
                          <td>2017-01-09</td>
                          <td>9</td>
                          <td><div class="badge badge-danger">Report</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>




  <div class="section-body">
  </div>
</section>
@endsection
