
let zoneData = 
[
    {
        "ID": 1,
        "Items": [160,62,63,196,197,111,165,16,17,12,171,208,209,210,207,224,164]
    },
    {
        "ID": 2,
        "Items": [161,62,63,196,197,111,165,8,9,10,11,54,59,60,61,166,12,171,208,209,210,207,224,164]
    },
    {
        "ID": 3,
        "Items": [163,62,63,196,197,111,16,17,8,9,10,11,52,54,59,60,61,171,208,209,210,207,224]
    },
    {
        "ID": 4,
        "Items": [162,62,63,196,197,16,17,165,8,9,10,11,54,59,60,61,12,207,164]
    }
];

function updateIcons()
{
    let currZoneID = document.getElementById("zoneId").value;
    let len = zoneData[currZoneID-1].Items.length;
    
    for(let i=0; i<len; i++)
    {
        let icon = 'images/region_icons/('+zoneData[currZoneID-1].Items[i]+').png';
        $('.icon'+i).attr('src', icon);
    }
    $('.fill_input').each(function(index){
        if(index!=0)
        {
            this.name = zoneData[currZoneID-1].Items[index-1];
        }
    });
}