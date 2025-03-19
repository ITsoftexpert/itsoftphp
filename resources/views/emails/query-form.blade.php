<!DOCTYPE html>
<html>
<head>
    <title>New Query Received</title>
</head>
<body>
    <h2>New Query Received</h2>
    <p><strong>Name:</strong> {{ $queryData['name'] }}</p>
    <p><strong>Email:</strong> {{ $queryData['email'] }}</p>
    <p><strong>Phone:</strong> {{ $queryData['phone_number'] }}</p>
    <p><strong>Message:</strong> {{ $queryData['your_msg'] }}</p>
    <p><strong>Company:</strong> {{ $queryData['company_name'] }}</p>
</body>
</html>
