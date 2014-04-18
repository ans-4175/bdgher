var ceritas = [
	{
		judul:"Tempat 1",
		isi:"Lorem ipsum"
	},
	{
		judul:"The Saga of Missing Lady",
		isi:"I found her! At last, after all this time I&#700;ve spent looking for her. It all started that day when I saw her. Oh, pardon my rudeness, I must introduce myself first. My name is Hidjo, I&#700;m a<br/>student here, in Technische Hogeschool or Institut Teknologi Bandung as now it is called.<br/>This university was build in 1918, as a first technical university in Indonesia. You could see<br/>this building&#700;s masterpiece as a two identical separate hall in the front, East Hall and West<br/>Hall, just look at the roof, you&#700;ll find its local indonesian touch, but you can definitely tell the<br/>european technology mixture there. Located in jalan Ganeca number 10. And just a trivial<br/>fact, you can find the &#8220;number 10&#8221; in front of the East Hall (Aula Timur) not many people<br/>noticed that. Oh, where was i? Her, yes I was talking about her, Kartika. I first saw her at<br/>the Borromeus chapel, behind the Borromeus hospital. Would you kindly walk with me,<br/>trace back our meetings and help me find her?"
	}
];

var infos = [
	{
		judul:[
			{teks:"Belum Ada Judul"},
		],
		cover:"albar-cover.jpg",
		addr:"N/A",
		year:"N/A",
		arch:"N/A",
		styled:"N/A",
		trivia:[
			{teks:"N/A"},
		],
		sources:[
			{ref:"N/A"},
		],
	},
	{
		judul:[
			{teks:"Aula Barat &amp; Timur ITB"},
			{teks:"(West and East Hall of ITB)"},
		],
		cover:"albar-cover.jpg",
		addr:"Jl. Ganesha No.10",
		year:"1918",
		arch:"Henry Maclaine Pont",
		styled:"Indisch Architecture",
		trivia:[
			{teks:"Two of the first buildings in <b>Technische Hoogeschool te Bandoeng</b>, which later was renamed to Institut Teknologi Bandung (ITB)."},
			{teks:"<b>Indisch Architecture</b> is a mix between Nusantaran (Indonesian) and European architectural elements."},
			{teks:"<b>The roof design</b> is a mix between West Sumatran (Minangkabau) Rumah Gadang's horn-like roof and Central-Javan traditional multi-layered roof."},
			{img:"albar-atap.jpg", caption:"The horn-like multi-layered roof"},
			{teks:"To create such large space without using any collumns, in the middle of the room Pont employed a then cutting edge technology of using <b>layers of bended wood</b>, fastened together with metal rings."},
			{img:"albar-construction.jpg", caption:"Construction of the wooden collumns"},
			{img:"albar-interior.jpg", caption:"The collumns"},
			{teks:"The high ceiling and ventilation system makes the building <b>perfectly suitable for tropical climate</b>."},
			{img:"albar-dies-natalis.jpg", caption:"The first Dies Natalis of Technische Hoogeschool te Bandoeng"},
		],
		sources:[
			{ref:"wikimapia.org/91578/Institut-Teknologi-Bandung-ITB"},
			{ref:"wahyupratomo.tumblr.com/post/5904480534/keajaiban-bangunan-bangunan-di-itb-speaking-building"},
			{ref:"id.wikipedia.org/wiki/Institut_Teknologi_Bandung"},
			{ref:"rinaldimunir.wordpress.com/2013/11/16/wajah-baru-aula-barat-itb-setelah-restorasi/"},
		],
	}
];


var i = 0;
var tempat = getValue('tempat');
//
switch(tempat){
	case 'albaraltim':
		i=1;
		break;
	default:
		i=0;
}
//
var cerita = ceritas[i];
var info = infos[i];
