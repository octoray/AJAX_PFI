

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="http://octoraypfi.co.uk/staging/slicknav/dist/jquery.slicknav.js"></script>



<script type="text/javascript">
$.ajax({
crossDomain: true,
type:"POST",
    Authorization: "Basic MTpBRTdBMDdBOC1EMDg1LTQwQzYtQUNFNC1GRjg0RjE0RTMyNDc=",
async:false,
url: "http://pfi.imimobile.net/api/PersonalLink.svc/rest/SendAjaxPersonalLink",
    data: {
        "SessionToken": "4AF16E35-0232-2C74-1EC9-DB0AD7F87820",
        "MSISDN": 447768240407,
        "DestinationUrl": "http://the-sloth.uk/",
        "Message": "test 7 {url}",
        "Spoof": "12345678910"
    },
    dataType: "json",
    jsonpCallback: 'fnsuccesscallback'
    });
    </script>