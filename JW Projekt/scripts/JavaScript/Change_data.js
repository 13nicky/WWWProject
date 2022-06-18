const list = document.getElementsByClassName("expand");
function Expand()
{
    for(let i=0; i<list.length; i++)
    {
        list[i].style.display = "table-row";
    }
}