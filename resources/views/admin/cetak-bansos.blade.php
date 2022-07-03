<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <style type="text/css">
    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }

    #invoice {
        padding: 30px;
    }

    .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 15px
    }

    .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #3989c6
    }

    .invoice .company-details {
        text-align: right
    }

    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .contacts {
        margin-bottom: 20px
    }

    .invoice .invoice-to {
        text-align: left
    }

    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0;
    }

    .invoice .invoice-details {
        text-align: right
    }

    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #3989c6
    }

    .invoice main {
        padding-bottom: 50px
    }

    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
    }

    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
    }

    .invoice main .notices .notice {
        font-size: 1.2em
    }

    .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px
    }

    .invoice table th {
        padding: 15px;
        background: #bbd2ec;
        border: 1px solid #fff
    }

    .invoice table td {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff
    }

    .invoice table th {
        white-space: nowrap;
        font-weight: 400;
        font-size: 16px
    }

    .invoice table td h3 {
        margin: 0;
        font-weight: 400;
        color: #3989c6;
        font-size: 1.2em
    }

    .invoice table .qty,
    .invoice table .total,
    .invoice table .unit {
        text-align: right;
        font-size: 1.2em
    }

    .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #3989c6
    }

    .invoice table .unit {
        background: #ddd
    }

    .invoice table .total {
        background: #3989c6;
        color: #fff
    }

    .invoice table tbody tr:last-child td {
        border: none
    }

    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }

    .invoice table tfoot tr:first-child td {
        border-top: none
    }

    .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
    }

    .invoice table tfoot tr td:first-child {
        border: none
    }

    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }

    @media print {
        .invoice {
            font-size: 11px !important;
            overflow: hidden !important
        }

        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }

        .invoice>div:last-child {
            page-break-before: always
        }
    }
    </style>
</head>

<body>
    <div id="invoice">
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <header>
                    <div class="row contacts">
                        <div class="col company-details">
                            <h2 class="name" style="color: #3989c6">BansosApp</h2>
                            <div>Jl. Soekarno Hatta No 09. Malang 65141</div>
                            <div>(+62) 812-3456-7890</div>
                            <div>tim4bansosapp@gmail.com</div>
                        </div>
                    </div>
                </header>
                <main>
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col invoice-to">
                            <h2 class="to">Laporan Data Bantuan Sosial</h2>
                            <div class="address">Jl. Soekarno Hatta No 09. Malang 65141</div>
                            <div class="email">tim4bansosapp@gmail.com</div>
                        </div>
                    </div>
                    <div class="col invoice-details">
                        <div class="address">
                            <h5 style="color: #3989c6">LPBAPP-01</h5>
                            Due Date: 30/10/2018
                        </div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th style="font-weight: bolder;">NIK</th>
                                <th style="font-weight: bolder;">Nama</th>
                                <th style="font-weight: bolder;">Jenis Bansos</th>
                                <th style="font-weight: bolder;">Status Bansos</th>
                            </tr>
                        </thead>
                        @foreach ($laporan as $lpr)
                        <tbody style="background-color: white;">
                            <tr>
                                <td>{{ $lpr->nik }}</td>
                                <td>{{ $lpr->nama_lengkap }}</td>
                                <td>{{ $lpr->nama_bansos }}</td>
                                <td>{{ $lpr->proses }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </main>
                @include('partials.footer-admin')
            </div>
        </div>
    </div>
</body>

</html>