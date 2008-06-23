var NUM_ITEMS = 2;
var offset = 0;
var list = null;
var list_ids = null;

function goPrevious () {
	if (offset > 0) {
		offset--;
		move();
	}
}
function goNext () {
	if (list==null) init();
	if (offset < list.length-NUM_ITEMS) {
		offset++;
		move();
	}
}

function move () {
	document.getElementById('prev').firstChild.className = (offset==0) ? 'disabled' : '';
	document.getElementById('next').firstChild.className = (offset==list.length-NUM_ITEMS) ? 'disabled' : '';
	
	for (i in list) {
		list[i].className = ((i < offset) || (i >= offset+NUM_ITEMS)) ? 'hidden': 'visible';
	}
}

function init () {
	list = new Array();
	list_ids = new Array();
	for (i=0; document.getElementsByTagName('li')[i].parentNode.id=='list'; i++) {
		list[i] = document.getElementsByTagName('li')[i];
	}
}

function collapseAll () {
	divs = document.getElementsByTagName('div');
	for(i=0; i<divs.length; i++) {
		if (divs[i].id.substr(0, 6) == 'expand') {
			divs[i].style.display = 'none';
		}
	}
	as = document.getElementsByTagName('a');
	for (i=0; i<as.length; i++) {
		as[i].className = as[i].className.replace(/open/, 'closed');
	}
}
function expand (id, top, doNotCollapse) {
	if (element = document.getElementById('expand'+id)) {
		if ((element.style.display == 'none') || (element.style.display == '')) {
			collapseAll();
			lnk = document.getElementsByName('item'+id)[0];
			top = top || lnk.parentNode.offsetTop;
			lnk.className = lnk.className.replace(/closed/, 'open');
			element.style.top = top+'px';
			element.style.display = 'block';
		} else doNotCollapse || collapseAll();
		if (element.clientHeight+top > document.getElementById('footer').offsetTop) {
			document.getElementById('text').style.height = (element.clientHeight + top - document.getElementById('text').offsetTop)+'px';
			//document.getElementById('footer').style.marginTop = (element.clientHeight+top+48 - document.getElementById('footer').offsetTop)+'px';
		} else if (!doNotCollapse)	 {
			document.getElementById('text').style.height = '';
		}
	}
}