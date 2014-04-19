var ceritas = [
	{
		judul:"Tempat 1",
		isi:"Lorem ipsum"
	},
	{
		cover:"albar-cover.jpg",
		judul:"The Saga of Missing Lady",
		isi:"I found her! At last, after all this time I&#700;ve spent looking for her. It all started that day when I saw her. Oh, pardon my rudeness, I must introduce myself first. My name is Hidjo, I&#700;m a<br/>student here, in Technische Hogeschool or Institut Teknologi Bandung as now it is called.<br/>This university was build in 1918, as a first technical university in Indonesia. You could see<br/>this building&#700;s masterpiece as a two identical separate hall in the front, East Hall and West<br/>Hall, just look at the roof, you&#700;ll find its local indonesian touch, but you can definitely tell the<br/>european technology mixture there. Located in jalan Ganeca number 10. And just a trivial<br/>fact, you can find the &#8220;number 10&#8221; in front of the East Hall (Aula Timur) not many people<br/>noticed that. Oh, where was i? Her, yes I was talking about her, Kartika. I first saw her at<br/>the Borromeus chapel, behind the Borromeus hospital. Would you kindly walk with me,<br/>trace back our meetings and help me find her?"
	},
	{
		cover:"",
		judul:"Villa Merah",
		isi:"His name is Gatot, he lives in Villa Merah since he was went to study at ITB, his parent lives in Central Java, we&#700;ve met several times for football games in one of those land fields in the university during our free time. He was laughing when I asked about Kartika, he mentioned that she&#700;s a prima donna in her faculty, well, I could tell. He doesn&#700;t know where she lives, but recently she regularly visited the Drie Locomotief, it&#700;s a beautiful villa designed by Aalbers, she needed to observe it for her sketches assignment."
	},
	{
		cover:"",
		judul:"Drie Lokomotiven",
		isi:"This is the third day I visited Drie Locomotief, apparently she hasn&#700;t been here since then. I almost put my hope to see her to an end, when I saw her walking towards me clutching her sketchbook. I froze, pretend to look elsewhere. And there I saw her took a seat, and started opening her sketch book. This Drie Locomotief, so I heard, established in 1937. The maker, Albert Aalbers made beautiful and unique buildings here in Bandung. It includes the Savoy Homann Hotel and Denise Bank. It took me a while to gather my<br/>courage to talk to her, and when I think I&#700;m ready I begin to walk towards her, and that&#700;s the time when her friends running pass me by calling her name out loud. She smiled,<br/>packed her drawing tools, and walked with them. But I heard they were going to pick up their friend at Huysgenweg (Dayang Sumbi street), and I also heard my footsteps walking away, well, maybe it&#700;s not meant to be for me to get to know her."
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
	},
	{
		judul:[
			{teks:"Villa Merah ITB"},
		],
		cover:"",
		addr:"Jalan Tamansari 78",
		year:"1918",
		arch:"Richard Leonard Arnold Schoemaker",
		styled:"Indisch Architecture",
		trivia:[
			{teks:"It used to be ITB’s dormitory. It is the first residential building that being built by Schoemaker. Famous by the name Villa Merah (Red Villa) because its exposed red masonry that dominates its architecture appearance."},
			{teks:"The architecture combines European style with Indonesia’s humid and tropical architecture. Its function now hac changed into one of ITB’s offices."},
			{teks:"Villa Merah has 3 addresses : Jalan Ganesha 15D, Jalan Gelap Nyawang 8 and Jalan Tamansari 78"},
			{teks:"Richard Leonard Arnold Schoemaker born in Roermond, The Netherland. October 5th 1886. In 1920 he was inducted as a professor in architecture at Technische Hoogeschool te Bandoeng (THS, which now is Institut Teknologi Bandung)."},
			{teks:"He is well known as the expert to combine European and tropical architecture, made him the best architect in that era."},
		],
		sources:[
			{ref:"N/A"},
		],
	},
	{
		judul:[
			{teks:"Drie Lokomotiven"},
		],
		cover:"",
		addr:"Jalan Dago 111 , 113 and 115",
		year:"1936",
		arch:"A.F. Aalbers",
		styled:"Indisch Architecture",
		trivia:[
			{teks:"Built by Aalbers as three identical villas. Used to be owned by W.H. Hoogland who were the director of Denis Bank in Bandung. One of the three buildings still being used as private residency while the rest of the two have been used as commercial function."},
			{teks:"In all shape variations Aalbers ' architecture in modern design immutable ; buildings are characterized by a striking spatial dynamics and intertwining indoor and outdoor spaces."},
			{teks:"One of the owners who sold the villa to a commercial company told that one of the reasons the building is sold is because his incapability to pay the building tax which up to 40 million rupiah each year"},
			{teks:"Albert Aalbers was born on 13 December 1897 in Rotterdam, the Netherlands. Between 1910 and 1918, Aalbers studied architecture at the Rotterdam Academy of Visual Arts and Techniques. Albert Aalbers and his brother, Theo, established the Gebroeder Aalbers architecture office in Rotterdam. n 1930 the Aalbers family moved to Bandung. Aalbers saw this as a good opportunity and he started to work as a freelance architect in the city"},
			{teks:"Drie Locomotief entrances to the rooms are always right in front of the window walls , which often continue the corners and behind which are large balconies"},
		],
		sources:[
			{ref:"N/A"},
		],
	},
];


var i = 0;
var tempat = getValue('tempat');
//
switch(tempat){
	case 'albaraltim':
		i=1;
		break;
	case 'villmer':
		i=2;
		break;
	case 'drielok':
		i=3;
		break;
	default:
		i=0;
}
//
var cerita = ceritas[i];
var info = infos[i];
