<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MetaMask Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-primary mt-5" onclick="web3Login()">Log in with MetaMask</button>
            </div>
        </div>
    </div>

    <script>
        async function web3Login(){
            if(!window.ethereum){
                alert("MetaMask not detected. Please install MetaMask and try again.");
                return;
            }
        }
    </script>
</body>
</html>
