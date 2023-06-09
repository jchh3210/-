 var drink_prices = new Array();
 drink_prices["menu1"]=4500;
 drink_prices["menu2"]=5700;
 drink_prices["menu3"]=5700;
 drink_prices["menu4"]=7200;
 

 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["coffee"]=1000;
 filling_prices["syrup"]=500;
 filling_prices["milk"]=1000;
 filling_prices["cream"]=500;
 filling_prices["Buttercream"]=1000;
 filling_prices["caramel"]=1000;
 filling_prices["mocka"]=1000;
 filling_prices["Mint"]=1000;
 filling_prices["Chocolate"]=1000;
 
	 
	 
function getdrinktypePrice()
{  
    var drinktypePrice=0;
    var theForm = document.forms["cafeform"];
    var selecteddrink = theForm.elements["selecteddrink"];
    for(var i = 0; i < selecteddrink.length; i++)
    {
        if(selecteddrink[i].checked)
        {
            
            drinktypePrice = drink_prices[selecteddrink[i].value];
            break;
        }
    }
    return drinktypePrice;
}

function getFillingPrice()
{
    var drinkFillingPrice=0;
    var theForm = document.forms["cafeform"];
     var selectedFilling = theForm.elements["filling"];
     
  
    drinkFillingPrice = filling_prices[selectedFilling.value];

    return drinkFillingPrice;
}

function icesPrice()
{
    var icesPrice=0;
    var theForm = document.forms["cafeform"];
    var includeices = theForm.elements["includeices"];

    if(includeices.checked==true)
    {
        icesPrice=100;
    }
    return icesPrice;
}

function plasticcupPrice()
{

    var plasticcupPrice=0;
    var theForm = document.forms["cafeform"];
    var plasticcup = theForm.elements["plasticcup"];
    if(plasticcup.checked==true){
        plasticcupPrice=500;
    }
    return plasticcupPrice;
}
        
function calculateTotal()
{
    var drinkPrice = getdrinktypePrice() + getFillingPrice() + icesPrice() + plasticcupPrice();
    
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "총 금액은 "+drinkPrice+"원 입니다.";

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}