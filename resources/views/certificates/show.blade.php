<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ISO-90001</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <style>
      @import url('https://fonts.googleapis.com/css?family=Open+Sans');
      </style>
    <style type="text/css">
        body {
          font-family: 'Open Sans', sans-serif;
          color: #000;
        }
        body {
          background: rgb(204,204,204); 
        }
        page {
          background: white;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {  
          width: 794px;
          height: 1123px; 
        }
        page[size="A4"][layout="portrait"] {
          width: 29.7cm;
          height: 21cm;  
        }
        page[size="A3"] {
          width: 29.7cm;
          height: 42cm;
        }
        page[size="A3"][layout="portrait"] {
          width: 42cm;
          height: 29.7cm;  
        }
        page[size="A5"] {
          width: 14.8cm;
          height: 21cm;
        }
        page[size="A5"][layout="portrait"] {
          width: 21cm;
          height: 14.8cm;  
        }
        @media print {
          body, page {
            margin: 0;
            box-shadow: 0;
          }
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: center;
            width: 100%;
            padding: 375px 870px;
        }
        .left {
          width: 100%;
        }

        .right {
          width: 100%;
        }
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        td{
          padding: 4px;
        }
        .company{
          margin-top: 355px;
          text-align: center;
          font-weight: bold;
          font-size: 20px;
        }
        .address{
          padding-top: 500px;
          text-align: center;
          font-weight: bold;
          font-size: 15px;
        }
        .scope{
          padding-top: 135px;
          text-align: center;
          font-weight: bold;
        }
        .certificate{
          padding-top: 58px;
          text-align: center;
          margin-right:-30px;
        }
        .regisdate{
          padding-top: 20px;
          padding-left: 240px;
        }
        .expdate{
          padding-left: 10px;
        }
        .survdate{
         padding-left: 320px; 
        }
        .qrcode{
          padding-top: 158px;
          padding-left: 690px;
        }  
        table#table1 {
          width:70%; 
          margin-left:15%; 
          margin-right:15%;
        }
        table#table2 {
          width:80%; 
          margin-left:10%; 
          margin-right:10%;
        }
    </style>
  </head>
<body>

<section>
  <page size="A4" style="background-image:url('../assets/formats/{{ str_replace(':', '', $certificate->standard) }}-draft.jpg'); background-repeat: no-repeat; width: 794px; height: 1123px;">
      <div class="row col-md-12 company">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;">
              <td>{{ $certificate->company_name }}</td>
            </tr>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;font-size: 15px;">
              <td>{{ $certificate->address_line_one }}</td>
            </tr>
                        <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;font-size: 15px;">
              <td>{{ $certificate->address_line_two }}</td>
            </tr>
                        <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;font-size: 15px;">
              <td>{{ $certificate->address_line_three }}</td>
            </tr>                                             
        </table>
      </div>
      <div class="row col-md-12 scope">
          <table id="table2">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 10px;">
              <td>{{ $certificate->scope_line_one }}</td>
            </tr>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 10px;">
              <td>{{ $certificate->scope_line_two }}</td>
            </tr>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 10px;">
              <td>{{ $certificate->scope_line_three }}</td>
            </tr>     
        </table>
      </div>
      <div class="row col-md-12 certificate">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold; font-size: 15px;">
              <td>{{ $certificate->certificate_no }}</td>
            </tr>
        </table>
      </div>
      @php
        $issue_date = $certificate->issue_date;
        $expiry_date = $certificate->expiry_date;
        $first_surv = $certificate->first_surv;
        $second_surv = $certificate->second_surv;
      @endphp
      <div class="row col-md-12 regisdate">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 15px;">
              <td>{{ $issue_date ? date('d/m/Y', strtotime($issue_date)) : '' }}</td>
              <td style="padding-left: 215px;">{{ $issue_date ? date('d/m/Y', strtotime($issue_date)) : '' }}</td>
            </tr>
        </table>
      </div>
      <div class="row col-md-12 expdate">
          <table>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 15px;">
              <td style="padding-left: 315px;">{{ $expiry_date ? date('d/m/Y', strtotime($expiry_date)) : '' }}</td>
            </tr>
        </table>
      </div>
      <div class="row col-md-12 survdate">
          <table>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 15px;">
              <td>{{ $first_surv ? date('d/m/Y', strtotime($first_surv)) : '' }}</td>
              <td style="padding-left: 215px;">{{ $second_surv ? date('d/m/Y', strtotime($second_surv)) : '' }}</td>
            </tr>
        </table>
      </div>
      <!-- @php
        $url = 'https://prudentialiso.com/mycertificate/'.$certificate->id;
      @endphp
      <div class="row col-md-12 qrcode">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 15px;">
              <td>{!! QrCode::size(80)->generate($url); !!}</td>
            </tr>
        </table>
      </div> -->
  </page>
</section>

</body>
</html>



