<div class="card-body">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav ml-auto">
            <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search 'Event Name'" aria-label="Search 'Event Name'">
                <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
            </form>
        </ul>
    </nav>
    <div class="row">
        <div class="col-md-2">
            <div><b>Event ID</b></div>
            <div><b>Event Name</b></div>
        </div>
        <div class="col-md-5">
            <div><b>Event ID</b></div>
            <div><b>Event Name</b></div>
        </div>
    </div>
    <div></div>
    <div class="text-right">
        <x-adminlte-button theme="success" class="btn btn-sm btn-success" icon="far fa-light fa-edit" wire:click="addNew" label="Ubah Nilai" style="max-width: 200px;"/>
    </div>
    <div class="text-center">
        <b>"DATA NILAI Pre Defense"</b>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive users-table">
                <table class="table table-sm data-table">                
                    <thead class="thead">
                        <tr>
                            <th rowspan="2"class="text-center" width="5%">No</th>
                            <th rowspan="2"class="text-center" width="25%">Student</th>
                            <th colspan="2"class="text-center"  scope="colgroup">Supervisors</th>
                            <th colspan="3"class="text-center"  scope="colgroup">Examiners</th>
                          </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2"class="text-center">1</th>
                            <td rowspan="2"class="text-center"><div>kode prodi. NIM</div>MICHAEL CHANDRA PRATAMA</th>
                            <td colspan="2"class="text-center"  scope="colgroup">
                            <table>
                            <tr>
                                <th colspan="1"class="text-center" width="5%">BTM</th>
                                <th colspan="1"class="text-center" width="5%">MMS</th>
                            </tr>
                            <tr>
                                <td scope="col">000</td>
                                <td scope="col">000</td>
                            </tr>
                            </table></td>
                            <td colspan="2"class="text-center"  scope="colgroup">
                            <table>
                            <tr>
                                <th colspan="1"class="text-center" width="5%">IWR</th>
                                <th colspan="1"class="text-center" width="5%">AIP</th>
                                <th colspan="1"class="text-center" width="5%">MAQ</th>
                            </tr>
                            <tr>
                                <td scope="col">000</td>
                                <td scope="col">000</td>
                                <td scope="col">000</td>
                            </tr>
                            </table></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
