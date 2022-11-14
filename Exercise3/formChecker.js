const regexCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var flash = 0;
var wallet = 0;
var nyquil = 0;

function load()
{
    document.getElementById( "flash_quantity" ).oninput = function()
    {
        flash = parseInt( document.getElementById( "flash_quantity" ).value );

        if( parseInt( document.getElementById( "flash_quantity" ).value ) > 99 )
        {
            document.getElementById( "flash_quantity" ).value = 99;
            flash = 99;
        }
        else if( parseInt( document.getElementById( "flash_quantity" ).value ) < 0 )
        {
            document.getElementById( "flash_quantity" ).value = 0;
            flash = 0;
        }
        else if( isNaN( document.getElementById( "flash_quantity" ).value ) )
        {
            document.getElementById( "flash_quantity" ).value = 0;
            flash = 0;
        }
    };

    document.getElementById( "wallet_quantity" ).oninput = function()
    {
        wallet = parseInt( document.getElementById( "wallet_quantity" ).value );

        if( parseInt( document.getElementById( "wallet_quantity" ).value ) > 99 )
        {
            document.getElementById( "wallet_quantity" ).value = 99;
            wallet = 99;
        }
        else if( parseInt( document.getElementById( "wallet_quantity" ).value ) < 0 )
        {
            document.getElementById( "wallet_quantity" ).value = 0;
            wallet = 0;
        }

        else if( isNaN( document.getElementById( "wallet_quantity" ).value ) )
        {
            document.getElementById( "wallet_quantity" ).value = 0;
            wallet = 0;
        }
    };

    document.getElementById( "nyquil_quantity" ).oninput = function()
    {
        nyquil = parseInt( document.getElementById( "nyquil_quantity" ).value );

        if( parseInt( document.getElementById( "nyquil_quantity" ).value ) > 99 )
        {
            document.getElementById( "nyquil_quantity" ).value = 99;
            nyquil = 99;
        }
        else if( parseInt( document.getElementById( "nyquil_quantity" ).value ) < 0 )
        {
            document.getElementById( "nyquil_quantity" ).value = 0;
            nyquil = 0;
        }

        else if( isNaN( document.getElementById( "nyquil_quantity" ).value ) )
        {
            document.getElementById( "nyquil_quantity" ).value = 0;
            nyquil = 0;
        }
    };
}

function credentialsCheck()
{
    if( document.getElementById( "username" ).value.length != 0 && document.getElementById( "username" ).value.match( regexCheck ) && document.getElementById( "password" ).value.length != 0 ) return true;
    else return false;
}

function addFlash()
{
    if( flash < 99 )
    {
        flash += 1;
        document.getElementById("flash_quantity").value = flash;
    }
}

function addWallet()
{
    if( wallet < 99 )
    {
        wallet += 1;
        document.getElementById("wallet_quantity").value = wallet;
    }
}

function addNyquil()
{
    if( nyquil < 99 )
    {
        nyquil += 1;
        document.getElementById("nyquil_quantity").value = nyquil;
    }
}

function submitOrder()
{
    var radioBool = false;

    for( var i = 0; i < 3; i++ )
    {
        if( document.getElementsByClassName("shipping")[i].checked ) radioBool = true;
    }

    if( credentialsCheck() && radioBool ) document.forms['php_sucks'].submit();
    else alert("Hmm... something's not right.");
}