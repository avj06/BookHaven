<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    <header class="header">
        <h1>BookHaven</h1>
    </header>
    <div class="main">
        <h1>Admin Dashboard</h1>
        <div class="bt-container">
            <button onclick="pageUA()">User Accounts</button>
            <button onclick="pageBI()">Book Inventory</button>
        </div>
        <div class="bt-container">
            <button onclick="pageSA()">Staff Accounts</button>
            <button onclick="pageGR()">Generate Report</button>
        </div>
        <button class="bt-logout" onclick="logout()">Logout</button>
    </div>

    <script>
        pageGR=()=>{
            window.location.href = 'admin-GR.php'
        }
        pageSA=()=>{
            window.location.href = 'admin-SA.php'
        }
        pageBI=()=>{
            window.location.href = 'admin-BI.php'
        }
        pageUA=()=>{
            window.location.href = 'admin-UA.php'
        }
        logout=()=>{
            window.location.href = 'config/BE_dash.php'
        }
    </script>
</body>
</html>