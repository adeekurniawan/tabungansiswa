<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/instemplate.css">
    <title>Login - Tabungan Siswa</title>
</head>
<body>
    <form class="form-ins form-login" action="./proses/cek_login" method="POST">        
            <table>
                <tr>
                    <td>Username</td>
                    <td>                
                    <input placeholder="username" type="text" name="username">                
                    </td>
                </tr>  
                <tr>
                    <td>Password</td>
                    <td><input placeholder="password" type="password" name="password"></td>
                </tr>  
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Login</button>
                    </td>
                </tr>        
            </table>                                                
    </form>    
</body>
</html>
