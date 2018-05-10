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
          width: 2480px;
          height: 3508px; 
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
          padding: 5px;
        }
        .company{
          margin-top: 1110px;
          text-align: center;
          font-weight: bold;
          font-size: 70px;
        }
        .address{
          padding-top: 500px;
          text-align: center;
          font-weight: bold;
          font-size: 50px;
        }
        .scope{
          padding-top: 475px;
          text-align: center;
          font-weight: bold;
          font-size: 40px;
        }
        .certificate{
          padding-top: 285px;
          text-align: center;
          margin-right:-30px;
          padding-right:190px;
        }
        .regisdate{
          padding-top: 110px;
          padding-left: 700px;
        }
        .expdate{
          padding-left: 317px;
        }
        .survdate{
         padding-left: 960px; 
        }
        .qrcode{
          padding-top: 530px;
          padding-left: 2130px;
        }  
        table#table1 {
          width:70%; 
          margin-left:15%; 
          margin-right:15%;
        }
    </style>
  </head>
<body>

<section>
  <page size="A4" style="background-image:url('../assets/formats/{{ str_replace(':', '', $certificate->standard) }}.jpg'); background-repeat: no-repeat;">
      <div class="row col-md-12 company">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;font-size: 70px;">
              <td>{{ $certificate->company_name }}</td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;font-size: 50px;">
              <td>{{ $certificate->address_line_one }}</td>
            </tr>
                        <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;font-size: 50px;">
              <td>{{ $certificate->address_line_two }}</td>
            </tr>
                        <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold;font-size: 50px;">
              <td>{{ $certificate->address_line_three }}</td>
            </tr>                                             
        </table>
      </div>
      <div class="row col-md-12 scope">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 30px;">
              <td>{{ $certificate->scope_line_one }}</td>
            </tr>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 30px;">
              <td>{{ $certificate->scope_line_two }}</td>
            </tr>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 30px;">
              <td>{{ $certificate->scope_line_three }}</td>
            </tr>     
        </table>
      </div>
      <div class="row col-md-12 certificate">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-weight: bold; font-size: 50px;">
              <td>{{ $certificate->certificate_no }}</td>
            </tr>
        </table>
      </div>
      <div class="row col-md-12 regisdate">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 40px;">
              <td>{{ date('d/m/Y', strtotime($certificate->issue_date)) }}</td>
              <td style="padding-left: 690px;">{{ date('d/m/Y', strtotime($certificate->issue_date)) }}</td>
            </tr>
        </table>
      </div>
      <div class="row col-md-12 expdate">
          <table>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 40px;">
              <td style="padding-left: 650px;">{{ date('d/m/Y', strtotime($certificate->expiry_date)) }}</td>
            </tr>
        </table>
      </div>
      <div class="row col-md-12 survdate">
          <table>
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 40px;">
              <td>{{ date('d/m/Y', strtotime($certificate->first_surv)) }}</td>
              <td style="padding-left: 720px;">{{ date('d/m/Y', strtotime($certificate->second_surv)) }}</td>
            </tr>
        </table>
      </div>
      <div class="row col-md-12 qrcode">
          <table id="table1">
            <tr style="font-family: 'Open Sans', sans-serif; color: #000; font-size: 40px;">
              <td>{!! QrCode::size(250)->generate(Request::url()); !!}</td>
            </tr>
        </table>
      </div>
  </page>
</section>

</body>
</html>



