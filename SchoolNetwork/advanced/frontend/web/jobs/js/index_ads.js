function getsm() {
    return get_mcookie('urlfrom');
}
function get_mcookie(Name) {
    var search = Name + '=';
    var returnvalue = '';
    if (document.cookie.length > 0) {
        offset = document.cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;
            end = document.cookie.indexOf(';', offset);
            if (end == -1)
                end = document.cookie.length;
            returnvalue = unescape(document.cookie.substring(offset, end));
        }
    }
    if (returnvalue.length < 2)
        returnvalue = '12001997';
    return returnvalue;
};
function getRandom() {

    return Math.round(Math.random() * 10000000);

};

function AdsClick(bid, cid) {
    (new Image()).src = '//cnt.zhaopin.com/Market/adpv.html?sid=' + bid + '&site=' + cid + '&smid=' + getsm() + '&random=' + getRandom();
};

function AdsClickRegister(bid, cid) {
    (new Image()).src = '//cnt.zhaopin.com/Market/adpv.html?sid=' + bid + '&site=' + cid + '&smid=' + getsm() + '&random=' + getRandom();
};
// ��ҵ�û�ҳ�汨��ע�͵����´���
// if($('.click_closed')){
//     $(function(){
//         $('.third_party').css('display','none');
//         $('.click_closed').css('cursor','pointer').click(function(){
//             $('.third_party').css('display','block');
//         })
//     });
// }