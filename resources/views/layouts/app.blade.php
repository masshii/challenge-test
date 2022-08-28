<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <title>@yield('title')</title>
  <style>
    .content {
      margin-top: 80px;
      margin-left: auto;
      margin-right: auto;
      max-width: 720px;
    }

    h1 {
      text-align: center;
      font-size: 25px;
    }

    .content-required {
      color: red;
    }

    .error {
      color: red;
    }

    .form-item {
      padding-top: 24px;
      padding-bottom: 24px;
      width: 100%;
      display: flex;
      align-items: center;
        }

    .Form-Item:nth-child(5) {

    }

    .form-item-name {
      width: 25%;
      max-width: 248px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 18px;
    }

    .form-item-input {
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-left: 40px;
      padding-left: 1em;
      padding-right: 1em;
      height: 48px;
      flex: 1;
      width: 100%;
      max-width: 410px;
      font-size: 18px;
    }

    .form-item-gender {
      width: 30%;
      max-width: 248px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 18px;
    }

    .form-gender-label {
      font-weight: 500;
      font-size: 18px;
    }

    .form-item-email {
      width: 25%;
      max-width: 248px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 18px;
    }

    .form-item-post {
      width: 25%;
      max-width: 248px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 18px;
    }

    .form-item-address {
      width: 25%;
      max-width: 248px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 18px;
    }

    .form-item-building {
      width: 25%;
      max-width: 248px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 18px;
    }

    .form-item-contact.isMsg {
      margin-top: 8px;
      margin-bottom: auto;
    }

    .form-item-textarea {
      border: 1px solid #ddd;
      border-radius: 6px;
      height: 150px;
      flex: 1;
      font-size: 18px;
    }

    .form-item-contact {
      width: 25%;
      max-width: 248px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 18px;
    }

    .btn {
      text-align: center;
    }

    .comfirmation-btn {
      padding: 8px 50px;
      color: white;
      background: black;
      border-radius: 5px;
    }

    .send-btn {
      padding: 8px 50px;
      color: white;
      background: black;
      border-radius: 5px;
      margin-bottom: 5px;
    }

    .back {
      text-align: center;
    }

    .message {
      text-align: center;
      margin-top: 300px;
      padding-bottom: 20px;
    }

    .top-btn {
      padding: 8px 20px;
      color: white;
      background: black;
      border-radius: 5px;
    }
  </style>
</head>


<body>
  <div>
    @yield('content')
  </div>
</body>
</html>