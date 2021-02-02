/*document.getElementById("phone").addEventListener('keyup', function (event) { if (event.keyCode === 13) search() });*/
$(document).ready(function () {
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});

document.getElementById("search").addEventListener('click', search);
finding = false
let loaddingscreen = document.getElementById("loading");
loaddingscreen.style.display = "none";
document.getElementById("result").style.display = "none";
async function search() {
    document.getElementById("result").style.display = "block";
    if (finding) return
    document.getElementById("result-table").style.display = "none";
    document.getElementById("result-text").style.display = "none";
    let phonenumber = document.getElementById("phone").value
    if (phonenumber[0] != '0') {
        document.getElementById("phone").focus();
        var text = document.getElementById("result-text");
        text.classList.remove('text-danger');
        text.classList.remove('text-success');
        text.classList.add('text-danger')
        text.textContent = "Số điện thoại không hợp lệ!";
        text.style.display = "inline";
        return false;
    }
    finding = true;
    loaddingscreen.style.display = "";
    try {
        let table = document.getElementById("tabledata");
        let length = table.rows.length;
        for (i = 1; i < length; i++)
            table.deleteRow(1);

        let data = await fetch(`https://script.google.com/macros/s/AKfycbxkvGgCNRVqBgiwH1_TvRcBUVAjSie5Z3U-ahe7ylNn3VPYqgb5T6Mb6Q/exec?phone=${phonenumber}`).then(res => { return res.json() }).then(res => { return res.data })

        for (i = 0; i < data.length; i++) {
            let dataper = data[i];
            let x = table.insertRow(1);

            let stt = x.insertCell(0);
            let name = x.insertCell(1);
            let study = x.insertCell(2);
            let mail = x.insertCell(3);
            let payment = x.insertCell(4);
            let paystatus = x.insertCell(5);


            stt.innerHTML = dataper.stt;
            name.innerHTML = dataper.name;
            study.innerHTML = dataper.study;
            mail.innerHTML = dataper.mail;
            payment.innerHTML = dataper.payment;

            if (dataper.paystatus) paystatus.innerHTML = "<div id='payed' >Đã Thanh Toán <div>";
            else paystatus.innerHTML = "<div id='nonpayed' >Chưa Thanh Toán <div>";

        }
        finding = false;
        loaddingscreen.style.display = "none";

        var text = document.getElementById("result-text");
        text.classList.remove('text-danger');
        text.classList.remove('text-success');

        if (data.length >= 1) {
            document.getElementById("result-table").style.display = "block";
            text.classList.add('text-success');
            text.textContent = data.length;
            text.style.display = "inline";
        }
        else {
            text.classList.add('text-danger');
            text.textContent = "Không tìm thấy!"
            text.style.display = "inline";
            document.getElementById("result-table").style.display = "none";
        }
    }
    catch
    {
        finding = false
        loaddingscreen.style.display = "none";
    }

}
