<!-- resources/views/surat.blade.php -->

<title>Dokumen Report</title>

<style>
    /* Tambahkan gaya CSS untuk mengatur tampilan surat */
    body {
        font-family: Arial, sans-serif;
        width: 211mm;
        height: 298mm;
        margin: 0 auto;
        padding: 1mm;
        box-sizing: border-box;
        background-color: #9b9797; /* Warna abu-abu */
    }
    .print-button {
        position: fixed;
        left: 20px;
        top: 20px;
        z-index: 9999;
        display: flex;
      align-items: center;
      justify-content: center;
      width: 300px;
      height: 50px;
      background-color: #5cecd4;
      color: #1a0330;
      border-radius: 5px;
      font-size: 12pt;
      font-weight: bold;
      text-decoration: none;
      
    }

    .print-button i {
      margin-right: 5px;
    }
    .surat-container {
        position: relative;
        background-color: #9b9797; /* Warna putih */
        overflow: hidden;
    }

    .surat-container2 {
        background-color: #FFFFFF;
        margin: 0 auto;
        padding: 20px;
        width: 211mm;
        height: 298mm;
        box-sizing: border-box;
        border: 2px solid #3a3a3a; /* Ketebalan border */
        pointer-events: none;
        position: relative; /* Tambahkan posisi relatif */
    }

    .logo {
        position: absolute;  /* Tambahkan posisi absolut */
        top: 45px; /* Atur jarak dari atas */
        left: 40px; /* Atur jarak dari kiri */
    }

    .logo img {
        max-width: 100px;
        height: auto;
    }

    h1 {
        font-size: 20px;
        margin-bottom: 20px;
    }

    p {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .cop-surat {
        margin-top: 10px;
        margin-left: 80px;
        text-align: center;/* Atur jarak dari atas */
        font-family: "Times New Roman", Times, serif;
    }

    /* Gaya cetakan untuk media print */
    @media print {
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF; /* Warna putih */
        }

        .surat-container {
            margin: 0;
            border: none;
            box-shadow: none;
        }

        .surat-container2 {
            margin: 0 auto;
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 0;
        }
        
        .logo {
        position: absolute;  /* Tambahkan posisi absolut */
        top: 45px; /* Atur jarak dari atas */
        left: 0; /* Atur jarak dari kiri */
        }

        .logo img {
            max-width: 100px;
            height: auto;
        }
        table.data-table {
            border: 3px solid #000;
            
        }

        table.data-table th,
        table.data-table td {
            border: 1px solid #000;
        }
        .print-button {
            display: none;
        }

    
    }
</style>

<div class="surat-container">
    <div class="surat-container2">
        <div class="col-lg-12" style = "border-bottom-style: double; border-bottom-color: rgb(39, 39, 39); border-bottom-width: 5px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <img src="{{ asset('UPI.png') }}" class="profile-image" alt="Profile">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="cop-surat" >
                        <div style=" font-size: 18pt;text-transform: uppercase;">Kementerian Pendidikan, Kebudayaan,</div>
                        <div style=" font-size: 18pt;text-transform: uppercase;">Riset, dan Teknologi</div>
                        <div style=" font-size: 16pt;text-transform: uppercase;"><b>Universitas Pendidikan Indonesia</b></div>
                        <div style=" font-size: 16pt;text-transform: uppercase;"><b>Fakultas Pendidikan Teknologi dan kejuruan</b></div>
                        <div style=" font-size: 12pt;">Jl. Dr. Setiabudi Nomor 207 Bandung 40154</div>
                        <div style=" font-size: 12pt;">Telepon (022)2011576/(022)2013163-2013164 Pesawat 34001/34006 Fax (022) 2013151</div>
                        <div style=" font-size: 12pt;">Homepage: <a style="font-style: italic;color: blue;">fptk@upi.edu</a> - e-mail: <a style="font-style: italic;color: blue;">https://fptk.upi.edu</a></div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-12" style="margin-left: 40px;font-family: Times New Roman, Times, serif;">
            <div><b>Nomor</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Event ID</div>
            <div><b>Lampiran</b>&nbsp;&nbsp;: -</div>
            <div><b>Hal</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Report STE</div>
        </div>

        <!-- Tambahkan bagian surat lainnya sesuai kebutuhan -->
    </div>

    <div class="surat-container2">
        <div class="col-lg-12" style = "border-bottom-style: double; border-bottom-color: rgb(39, 39, 39); border-bottom-width: 5px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <img src="{{ asset('UPI.png') }}" class="profile-image" alt="Profile">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="cop-surat" >
                        <div style=" font-size: 18pt;text-transform: uppercase;">Kementerian Pendidikan, Kebudayaan,</div>
                        <div style=" font-size: 18pt;text-transform: uppercase;">Riset, dan Teknologi</div>
                        <div style=" font-size: 16pt;text-transform: uppercase;"><b>Universitas Pendidikan Indonesia</b></div>
                        <div style=" font-size: 16pt;text-transform: uppercase;"><b>Fakultas Pendidikan Teknologi dan kejuruan</b></div>
                        <div style=" font-size: 12pt;">Jl. Dr. Setiabudi Nomor 207 Bandung 40154</div>
                        <div style=" font-size: 12pt;">Telepon (022)2011576/(022)2013163-2013164 Pesawat 34001/34006 Fax (022) 2013151</div>
                        <div style=" font-size: 12pt;">Homepage: <a style="font-style: italic;color: blue;">fptk@upi.edu</a> - e-mail: <a style="font-style: italic;color: blue;">https://fptk.upi.edu</a></div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12" style="margin-left: 40px; margin-right: 30px; font-family: Times New Roman, Times, serif;">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive users-table">
                        <table class="table table-sm data-table" width="100%">
                            <thead class="thead">
                                <tr style="background-color: #a7f8ed">
                                    <th rowspan="2" class="text-center" width="5%">No</th>
                                    <th rowspan="2" class="text-center" width="25%">Student</th>
                                    <th colspan="2" class="text-center" scope="colgroup">SPV</th>
                                    <th colspan="2" class="text-center" scope="colgroup">Seminar</th>
                                    <th colspan="1" class="text-center">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #ebfffc">
                                    <td rowspan="2" class="text-center" style="text-align: center; font-size: 20px; background-color:#99d4cc ; vertical-align:middle;">1</td>
                                    <td rowspan="2" class="text-center" style="vertical-align:middle">
                                        <div>kode prodi. NIM</div>MICHAEL CHANDRA PRATAMA
                                    </td>
                                    <td colspan="2" class="table-responsive users-table" scope="colgroup">
                                        <table class="table table-sm" width="100%">
                                            <tr>
                                                <th colspan="1" class="text-center" width="50%"><u>BTM</u></th>
                                                <th colspan="1" class="text-center" width="50%"><u>MMS</u></th>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">000</td>
                                                <td style="text-align: center;">000</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="2" class="text-center" scope="colgroup">
                                        <table>
                                            <tr>
                                                <th colspan="1" class="text-center" width="5%"><u>IWR</u></th>
                                                <th colspan="1" class="text-center" width="5%"><u>AIP</u></th>
                                                <th colspan="1" class="text-center" width="5%"><u>MAQ</u></th>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">000</td>
                                                <td style="text-align: center;">000</td>
                                                <td style="text-align: center;">000</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td rowspan="2" class="text-center" style="text-align: center;">A</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tambahkan bagian surat lainnya sesuai kebutuhan -->
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <button style="cursor:pointer"class="print-button" onclick="printPage()"><i class="fas fa-file-pdf"></i>Klik untuk Download PDF/Print &nbsp;<i class="fas fa-print"></i></button>
  <script>
    function printPage() {
      window.print();
    }
  </script>
</body>
</html>
