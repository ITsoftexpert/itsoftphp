<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>
    <!-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script> -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: #f0f2f5;
        }

        .sidebar {
            width: 250px;
            background: #222;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: 0.3s;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            border-bottom: 2px solid #444;
            padding-bottom: 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            display: block;
            border-radius: 5px;
            margin: 5px 0;
            font-size: 16px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #007BFF;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content {
            flex: 1;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        .content p {
            font-size: 16px;
            color: #555;
        }

        .footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }

        .blog-form textarea {
            width: 100%;
            height: 200px;
            padding: 10px;
        }

        .submit-btn {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            background: #007BFF;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #0056b3;
        }
    </style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: #f0f2f5;
        }

        .sidebar {
            width: 20%;
            background: #222;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: 0.3s;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            border-bottom: 2px solid #444;
            padding-bottom: 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 12px 15px;
            display: block;
            border-radius: 5px;
            margin: 5px 0;
            font-size: 16px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #007BFF;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content {
            flex: 1;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        .content p {
            font-size: 16px;
            color: #555;
        }

        .footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }

        .main_section_style {
            /* border:1px solid grey; */
            width: 80%;
            /* background-color: lightblue; */
        }

        .heading_nav_bar {
            /* border: 1px solid grey; */
            height: 5rem;
            margin-bottom: 1.5rem;
            background-color:#ebebeb;
        }

        table {
            border: 1px solid grey;
            border-collapse: collapse;
            width: 100%;
            /* Table ko full width leke aane ke liye */
        }

        th,
        td {
            border: 1px solid grey;
            padding: 8px;
            text-align: left;
            width: 250px;
            /* Har column ki width fix 250px */
            max-width: 250px;
            word-wrap: break-word;
            /* Bada text wrap ho jaye */
            overflow: hidden;
            white-space: nowrap;
            /* Text ek line me rahe */
        }

        th:nth-last-child(1),
        td:nth-last-child(1) {
            border: 1px solid grey;
            padding: 0px;
            text-align: left;
            width: 250px;
            max-width: 500px;
            word-wrap: break-word;
            overflow: hidden;
            white-space: normal;
            /* Text wrap ho sake */
        }

        .table_data_styling {
            /* border: 1px solid grey; */
            padding: 0 1.5rem;
            width: 100%;
            overflow-x: auto;
            overflow-y: auto;
            height: 75vh;

        }

        .text_align_center {
            text-align: center;
        }
        .mb_3{
            margin-bottom: 1.5rem;
        }
        textarea{
            border: none;
        }
        th{
            text-align: center;
        }

        @media screen and (max-width: 768px) {

            th,
            td {
                width: auto;
                /* Mobile pe width adjust ho jaye */
                max-width: none;
                white-space: normal;
                /* Mobile pe text wrap ho jaye */
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <!-- <a href="/admin/admin-dashboard">📄 Dashboard</a> -->
        <a href="/blogs/create">📄 Blogs</a>
        <!-- <a href="#success-stories">🏆 Success Stories</a> -->
        <a href="/admin/client-query">📩 Client Query</a>
    </div>