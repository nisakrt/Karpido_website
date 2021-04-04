//Tüm tablolar için ortak ayarlar

$(document).ready( function () {
    var table = $('#tablo').dataTable( {
       "pagingType": "full_numbers",
    	"language": {
            
            "emptyTable" : "Tabloda herhangi bir kayıt yok",
            "lengthMenu": "Her sayfada _MENU_ adet göster",
            "zeroRecords": "Veritabanında hiç bir değer bulunamadı",
            "info": "Toplam _PAGES_ sayfadan _PAGE_. sayfa gösteriliyor",
            "infoEmpty": "Kayıt bulunamadı",
            "infoFiltered": "(Toplam _MAX_ kayıttan filtrelendi)",
            "search": "Ara:",
             "paginate": {
        		"first":      "Birinci",
        		"last":       "Sonuncu",
        		"next":       "Sonraki",
        		"previous":   "Önceki"
    		},

        },
        "dom": 'T<"clear">lfrtip',
         "tableTools": {
            "sSwfPath": "swf/copy_csv_xls_pdf.swf"
        }
    } );

 } );
  