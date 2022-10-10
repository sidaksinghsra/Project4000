function SettingHover1() {
    document.getElementById("DropSettings").classList.toggle("showSetting");
  }
    window.onclick = function(e) {
      if (!e.target.matches('.SettingButton')) {
      let DropSettings = document.getElementById("DropSettings");
        if (DropSettings.classList.contains('showSetting')) {
          DropSettings.classList.remove('showSetting');
        }
      }
    }

function SettingHover2() {
     document.getElementById("DropAccount").classList.toggle("show");
    }
    window.onclick = function(ex) {
          if (!ex.target.matches('.AccountButton')) {
          let DropAccount = document.getElementById("DropAccount");
            if (DropAccount.classList.contains('show')) {
                DropAccount.classList.remove('show');
            }
          }
        }