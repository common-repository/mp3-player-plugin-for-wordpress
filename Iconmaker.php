<?php		if( isset($_GET['mp3resource']) && !empty($_GET['mp3resource'])) {		
// base64 encoding performed by base64img.php from http://php.holtsmark.no and Michael Wöhrer of the Maintenance mode plugin for the code 
			$resources = array( 
               'home.ico' =>
                     'AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACA'.
                     'AAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAjw9sACAQAAAAAAAAA'.
                     'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
                     'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
                     'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQEAAAEB'.
'AAEBAQABAQEAAAEAAQABAAABAAEAAQABAAABAQAAAQAAAQABAA'.
'EAAQAAAQABAAEAAAEAAQABAAAAAAEBAAABAAABAQEAAQEBAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAABAQ'.
'EAAQABAAEBAAAAAQAAAQABAAEAAQAAAQAAAAEAAAEAAQABAAEA'.
'AAEAAAABAAABAAEAAQEBAAEAAAABAQEAAQEBAAEAAQABAQAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
'AAAAAAAAAAAAAAAAAAAAAAAAA='.
'',
               'prbeats.png' =>
                     '/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAEBAQEBAQEBAQEBAQ'.
                     'ECAgMCAgICAgQDAwIDBQQFBQUEBAQFBgcGBQUHBgQEBgkGBwgI'.
                     'CAgIBQYJCgkICgcICAj/2wBDAQEBAQICAgQCAgQIBQQFCAgICA'.
                     'gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI'.
                     'CAgICAgICAj/wAARCAAQABADASIAAhEBAxEB/8QAHwAAAQUBAQ'.
                     'EBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUF'.
                     'BAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0f'.
                     'AkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVW'.
                     'V1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmq'.
                     'KjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi'.
                     '4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAA'.
                     'AAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAEC'.
                     'AxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNO'.
                     'El8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVm'.
                     'Z2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqK'.
                     'mqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq'.
                     '8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD+0b9sL4z2fwb+GdrqNj'.
                     '4iTSfH8+oWk+g2W9lbVzBdQvcQZCkbWgaQNu4w3rio/wBnn9qq'.
                     '2+PXiTXvDQ8C3XhOe005NTin/tSG8juYzO8DIdgVo3V4zlWA4I'.
                     'NZf7VPwI1f44eJ/gnYw395pXhe3uNVtdYuoLSG6aGOe1Bj3RSq'.
                     'y+WZIFUtjILJyOtd3+z5+zJ4E/Z6sdYfQmbXfFWoyMb7Wri2ii'.
                     'uLiHcWSDEYCiNCxwAO5JJr4RLNp51KUPdwsbJ7a2jfTd3vK11Z'.
                     'e7q3bX6pvL45YlLWu7tb6a28layvrd6+Z//Z'.
                     '',
               'wrench.png' => 
                        'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACX'.
                    	'BIWXMAAAsTAAALEwEAmpwYAAAKTWlDQ1BQaG90b3Nob3AgSUND'.
                    	'IHByb2ZpbGUAAHjanVN3WJP3Fj7f92UPVkLY8LGXbIEAIiOsCM'.
                    	'gQWaIQkgBhhBASQMWFiApWFBURnEhVxILVCkidiOKgKLhnQYqI'.
			'WotVXDjuH9yntX167+3t+9f7vOec5/zOec8PgBESJpHmomoAOV'.
			'KFPDrYH49PSMTJvYACFUjgBCAQ5svCZwXFAADwA3l4fnSwP/wB'.
			'r28AAgBw1S4kEsfh/4O6UCZXACCRAOAiEucLAZBSAMguVMgUAM'.
			'gYALBTs2QKAJQAAGx5fEIiAKoNAOz0ST4FANipk9wXANiiHKkI'.
			'AI0BAJkoRyQCQLsAYFWBUiwCwMIAoKxAIi4EwK4BgFm2MkcCgL'.
			'0FAHaOWJAPQGAAgJlCLMwAIDgCAEMeE80DIEwDoDDSv+CpX3CF'.
			'uEgBAMDLlc2XS9IzFLiV0Bp38vDg4iHiwmyxQmEXKRBmCeQinJ'.
			'ebIxNI5wNMzgwAABr50cH+OD+Q5+bk4eZm52zv9MWi/mvwbyI+'.
			'IfHf/ryMAgQAEE7P79pf5eXWA3DHAbB1v2upWwDaVgBo3/ldM9'.
			'sJoFoK0Hr5i3k4/EAenqFQyDwdHAoLC+0lYqG9MOOLPv8z4W/g'.
			'i372/EAe/tt68ABxmkCZrcCjg/1xYW52rlKO58sEQjFu9+cj/s'.
			'eFf/2OKdHiNLFcLBWK8ViJuFAiTcd5uVKRRCHJleIS6X8y8R+W'.
			'/QmTdw0ArIZPwE62B7XLbMB+7gECiw5Y0nYAQH7zLYwaC5EAEG'.
			'c0Mnn3AACTv/mPQCsBAM2XpOMAALzoGFyolBdMxggAAESggSqw'.
			'QQcMwRSswA6cwR28wBcCYQZEQAwkwDwQQgbkgBwKoRiWQRlUwD'.
			'rYBLWwAxqgEZrhELTBMTgN5+ASXIHrcBcGYBiewhi8hgkEQcgI'.
			'E2EhOogRYo7YIs4IF5mOBCJhSDSSgKQg6YgUUSLFyHKkAqlCap'.
			'FdSCPyLXIUOY1cQPqQ28ggMor8irxHMZSBslED1AJ1QLmoHxqK'.
			'xqBz0XQ0D12AlqJr0Rq0Hj2AtqKn0UvodXQAfYqOY4DRMQ5mjN'.
			'lhXIyHRWCJWBomxxZj5Vg1Vo81Yx1YN3YVG8CeYe8IJAKLgBPs'.
			'CF6EEMJsgpCQR1hMWEOoJewjtBK6CFcJg4Qxwicik6hPtCV6Ev'.
			'nEeGI6sZBYRqwm7iEeIZ4lXicOE1+TSCQOyZLkTgohJZAySQtJ'.
			'a0jbSC2kU6Q+0hBpnEwm65Btyd7kCLKArCCXkbeQD5BPkvvJw+'.
			'S3FDrFiOJMCaIkUqSUEko1ZT/lBKWfMkKZoKpRzame1AiqiDqf'.
			'WkltoHZQL1OHqRM0dZolzZsWQ8ukLaPV0JppZ2n3aC/pdLoJ3Y'.
			'MeRZfQl9Jr6Afp5+mD9HcMDYYNg8dIYigZaxl7GacYtxkvmUym'.
			'BdOXmchUMNcyG5lnmA+Yb1VYKvYqfBWRyhKVOpVWlX6V56pUVX'.
			'NVP9V5qgtUq1UPq15WfaZGVbNQ46kJ1Bar1akdVbupNq7OUndS'.
			'j1DPUV+jvl/9gvpjDbKGhUaghkijVGO3xhmNIRbGMmXxWELWcl'.
			'YD6yxrmE1iW7L57Ex2Bfsbdi97TFNDc6pmrGaRZp3mcc0BDsax'.
			'4PA52ZxKziHODc57LQMtPy2x1mqtZq1+rTfaetq+2mLtcu0W7e'.
			'va73VwnUCdLJ31Om0693UJuja6UbqFutt1z+o+02PreekJ9cr1'.
			'Dund0Uf1bfSj9Rfq79bv0R83MDQINpAZbDE4Y/DMkGPoa5hpuN'.
			'HwhOGoEctoupHEaKPRSaMnuCbuh2fjNXgXPmasbxxirDTeZdxr'.
			'PGFiaTLbpMSkxeS+Kc2Ua5pmutG003TMzMgs3KzYrMnsjjnVnG'.
			'ueYb7ZvNv8jYWlRZzFSos2i8eW2pZ8ywWWTZb3rJhWPlZ5VvVW'.
			'16xJ1lzrLOtt1ldsUBtXmwybOpvLtqitm63Edptt3xTiFI8p0i'.
			'n1U27aMez87ArsmuwG7Tn2YfYl9m32zx3MHBId1jt0O3xydHXM'.
			'dmxwvOuk4TTDqcSpw+lXZxtnoXOd8zUXpkuQyxKXdpcXU22niq'.
			'dun3rLleUa7rrStdP1o5u7m9yt2W3U3cw9xX2r+00umxvJXcM9'.
			'70H08PdY4nHM452nm6fC85DnL152Xlle+70eT7OcJp7WMG3I28'.
			'Rb4L3Le2A6Pj1l+s7pAz7GPgKfep+Hvqa+It89viN+1n6Zfgf8'.
			'nvs7+sv9j/i/4XnyFvFOBWABwQHlAb2BGoGzA2sDHwSZBKUHNQ'.
			'WNBbsGLww+FUIMCQ1ZH3KTb8AX8hv5YzPcZyya0RXKCJ0VWhv6'.
			'MMwmTB7WEY6GzwjfEH5vpvlM6cy2CIjgR2yIuB9pGZkX+X0UKS'.
			'oyqi7qUbRTdHF09yzWrORZ+2e9jvGPqYy5O9tqtnJ2Z6xqbFJs'.
			'Y+ybuIC4qriBeIf4RfGXEnQTJAntieTE2MQ9ieNzAudsmjOc5J'.
			'pUlnRjruXcorkX5unOy553PFk1WZB8OIWYEpeyP+WDIEJQLxhP'.
			'5aduTR0T8oSbhU9FvqKNolGxt7hKPJLmnVaV9jjdO31D+miGT0'.
			'Z1xjMJT1IreZEZkrkj801WRNberM/ZcdktOZSclJyjUg1plrQr'.
			'1zC3KLdPZisrkw3keeZtyhuTh8r35CP5c/PbFWyFTNGjtFKuUA'.
			'4WTC+oK3hbGFt4uEi9SFrUM99m/ur5IwuCFny9kLBQuLCz2Lh4'.
			'WfHgIr9FuxYji1MXdy4xXVK6ZHhp8NJ9y2jLspb9UOJYUlXyan'.
			'nc8o5Sg9KlpUMrglc0lamUycturvRauWMVYZVkVe9ql9VbVn8q'.
			'F5VfrHCsqK74sEa45uJXTl/VfPV5bdra3kq3yu3rSOuk626s91'.
			'm/r0q9akHV0IbwDa0b8Y3lG19tSt50oXpq9Y7NtM3KzQM1YTXt'.
			'W8y2rNvyoTaj9nqdf13LVv2tq7e+2Sba1r/dd3vzDoMdFTve75'.
			'TsvLUreFdrvUV99W7S7oLdjxpiG7q/5n7duEd3T8Wej3ulewf2'.
			'Re/ranRvbNyvv7+yCW1SNo0eSDpw5ZuAb9qb7Zp3tXBaKg7CQe'.
			'XBJ9+mfHvjUOihzsPcw83fmX+39QjrSHkr0jq/dawto22gPaG9'.
			'7+iMo50dXh1Hvrf/fu8x42N1xzWPV56gnSg98fnkgpPjp2Snnp'.
			'1OPz3Umdx590z8mWtdUV29Z0PPnj8XdO5Mt1/3yfPe549d8Lxw'.
			'9CL3Ytslt0utPa49R35w/eFIr1tv62X3y+1XPK509E3rO9Hv03'.
			'/6asDVc9f41y5dn3m978bsG7duJt0cuCW69fh29u0XdwruTNxd'.
			'eo94r/y+2v3qB/oP6n+0/rFlwG3g+GDAYM/DWQ/vDgmHnv6U/9'.
			'OH4dJHzEfVI0YjjY+dHx8bDRq98mTOk+GnsqcTz8p+Vv9563Or'.
			'59/94vtLz1j82PAL+YvPv655qfNy76uprzrHI8cfvM55PfGm/K'.
			'3O233vuO+638e9H5ko/ED+UPPR+mPHp9BP9z7nfP78L/eE8/sl'.
			'0p8zAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAP'.
			'n/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAADRUlEQVR42myT'.
			'WWhcdRxGz/9uM5lMszeTpJM6jUlTEuch1UkXSERs9UGQWKgURL'.
			'BS0mpBu2g1IAZRK+JDMT5EVFypFKOouOGCWwyN6YZVQmiTkq2Z'.
			'tpmkSWYyc+/MvfPzKdCK5/mc7+1TIsKNqIAKGRu0bWWNJZuKw8'.
			'XrpICShdGF83PD1/tlhJ/ElsRN/o0D+lZ1oGVX9PDmaGs4VFSJ'.
			'jkHe83CwSWUyDJwbHD91/NyrckreXGkMAKWUGezwH3uoe+f+5z'.
			'a/QN+FD8nmMrhAwCyks+lp7JxD0P9GpKZudW/wPv+ty986z4hI'.
			'XgOw2rXD9+xr218VLOfk5AC7mx4jRYIlrrGpZiuVBVX0jb5Pub'.
			'+I1+/qpW1v7Ckjph4H0FRQ1TTsCB+qCVaSkXn657/k07EPeDLa'.
			'TVrN4ikHgIebOulsPoTjZqkqKqduR/UR5VPlhlnPttr60Gonnw'.
			'Qth1UAf9s/Y1616Yr2YCk/V50pcp7HXDbHy2cPYpkmazdU1Y5F'.
			'ZtoNX0jVu74kGfFjGQox8uS0JKI7rA00oKHz1lQXv1z5Gj1XgB'.
			'Hwkc4qclYSXxX1hm6INe2MkJE45WYJlspzd8WD7FlzFCefxpUc'.
			'O6sPcDl7gX8WhnAdnWv2PHPZJLqJoRl5xLIgoxaZyU9wZ0UH+8'.
			'Kv4eZdei7vZSQ9iCYGByO9lAZKmXQncFQSnwW6B5o3z2yBB8oH'.
			'u8J7uMP3ANNL03w0dZQ5d4JPEi/x19JveLbBKw1f0VoRQ/nA74'.
			'I3T8JIXWRAxZUbjGKs07YQMiOcmOzBWXWJRn8MQfh1+T1cDxqc'.
			'LYS9GCOB06SHyaQvyZ963mZWC6iW9bcHG7N6lu/iJ/AVp6gPNl'.
			'Np3EJQL8HUTM5mvuGz6XepK6thNjHMyHG3b/E8bxsikjVXqe7x'.
			'5vTGsu0D4Uc2HCOPhu2lCBkRXLLkleBImu2NrXw8+jyjP9hjV7'.
			'6XF0XERUQQEXxltLUcYejR/iLpOhOVcXtIFr24pLyEjGVOyrNn'.
			'bpPdv5dJ9An+sIqIrXQ3nUkpVbumnc71Hdwf2Uidv9AoBFhedF'.
			'Pjpxm9+AWfxwd5R0Ti//vGFUy/ulfpVBt+SgFxba6Lx0zOlh//'.
			'6/47AFKUe3OquUwFAAAAAElFTkSuQmCC',
               'guide.png' => 
                    'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAX'.
                    'NSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAgY0hSTQAAeiYA'.
                    'AICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAHdJRE'.
                    'FUOE9jvH1Y+T8DJQBkACWYAewCFg44xsWHiSPLg9kw20GGoLNh'.
                    'YtgsgKsl1gBkF6C4hmYGwJyN7necYUBuTMADkSIDkJ2LLbDQvY'.
                    'PCx+VHfFGK7FqUhEROjMANwOYSfK6DJzL0aMGIJkLJnNzQx0jK'.
                    '5BoEAAOCFSRcUQETAAAAAElFTkSuQmCC'.
                    '',
               'wp.png' => 
                      'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAFfKj/FAAAAB3RJTUUH1wYQEiwG0'.
                      '0adjQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAARnQU1BAACxjwv8YQUAAABOUExURZ'.
                      'wMDN7n93ut1kKExjFjnHul1tbn75S93jFrnP///1qUxnOl1sbe71KMxjFrpWOUzjl'.
                      '7tYy13q3G5+fv95y93muczu/39zl7vff3//f//9Se9dEAAAABdFJOUwBA5thmAAAA'.
                      's0lEQVR42iWPUZLDIAxDRZFNTMCllJD0/hddktWPRp6x5QcQmyIA1qG1GuBUIArwj'.
                      'SRITkiylXNxHjtweqfRFHJ86MIBrBuW0nIIo96+H/SSAb5Zm14KnZTm7cQVc1XSMT'.
                      'jr7IdAVPm+G5GS6YZHaUv6M132RBF1PopTXiuPYplcmxzWk2C72CfZTNaU09GCM3T'.
                      'Ww9porieUwZt9yP6tHm5K5L2Uun6xsuf/WoTXwo7yQPwBXo8H/8TEoKYAAAAASUVO'.
                      'RK5CYII=',
               'rss.png' =>
                      'iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAABG'.
                      'dBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1h'.
                      'Z2VSZWFkeXHJZTwAAAJDSURBVHjajJJNSBRhGMd/887MzrQxRS'.
                      'LbFuYhoUhEKsMo8paHUKFLdBDrUIdunvq4RdClOq8Hb0FBSAVC'.
                      'UhFR1CGD/MrIJYqs1kLUXd382N356plZFOrUO/MMz/vO83+e93'.
                      'n+f+1zF+kQBoOQNLBJg0CTj7z/rvWjGbEOIwKp9O7WkhtQc/wM'.
                      'WrlIkP8Kc1lMS8eyFHpkpo5SgWCCVO7Z5JARhuz1Qg29fh87u6'.
                      '/9VWL1/SPc4Qy6n8c0FehiXin6dcCQaylDMhqGz8ydS2hKkmxN'.
                      'kWxowWnuBLHK6G2C8X6UJkBlxUmNqLYyNbzF74QLDrgFgh9LLE'.
                      '0NsPKxjW1Hz2EdPIubsOFdH2HgbwAlC4S19dT13o+3pS+vcSfv'.
                      'Ucq9YnbwA6muW9hNpym/FWBxfh0CZkKGkPBZeJFhcWQAu6EN52'.
                      'QGZ/8prEKW+cdXq0039UiLXhUYzdjebOJQQI30UXp6mZn+Dtam'.
                      '32Afu0iyrgUvN0r+ZQbr8HncSpUVJfwRhBWC0hyGV8CxXBL5SW'.
                      'Yf9sYBidYLIG2V87/ifVjTWAX6AlxeK2C0X8e58hOr/Qa2XJ3i'.
                      'LMWxB1h72tHs7bgryzHAN2o2gJorTrLxRHVazd0o4TXiyV2Yjs'.
                      '90uzauGvvppmqcLjwmbZ3V7BO2HOrBnbgrQRqWUgTZ5+Snx4We'.
                      'KfzCCrmb3axODKNH+vvUyWjqyK4DiKQ0eXSpFsgVvLJQWpH+xS'.
                      'pr4otg/HI0TR/t97cxTUS+QxIMRTLi/9ZYJPI/AgwAoc3W7Zrq'.
                      'R2IAAAAASUVORK5CYII='.
                      '',
               'arrasthm.png' =>
'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAX'.
'NSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAgY0hSTQAAeiYA'.
'AICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAXJJRE'.
'FUOE+lk11OwkAUhXEn+ENLS1v6R/kprUB50ATjAjS+qSsgPiu6'.
'APVZXQDBd1yAlAVQF0D3cZy5gYHyZOMkXzrTnnPu7U27VygUwP'.
'jX4gHohX4uVoWpOCJm1tVyLrhn3T0FGBUlgyKXcLRfJPh+93km'.
'oM8CTE3NIB0UEc++icHpCXW3reGeTQfHbViGJtCY+PbmGnwtl0'.
'uMHu6hlqWMJmKerVcI4FQNgSqVMBmPWfUZvqZTJIsF5KPDjCYK'.
'g01AP2yjZlUFXJyyyh/vb7gbDqmTDjM4VV1ouEd00Gft1B2LcE'.
'0D52cDMiXJguDr6XFEM1jruCczg2bNAcfSNby+PJPp6vKCSNMU'.
'8ziGppRJw9mZgQ+/7hKaIuMnSTCfxzBWk/+cTCjQc220PId02e'.
'8g8BE0PMKzTGZUYFZYu7aFpuvAZl1VZAm2oQtdxDziFbrsELYa'.
'ueAeEdBrt9Dxm7ngHhHAN112Iw+Zn2nrsE798/UXpK+XCsDyud'.
'sAAAAASUVORK5CYII='.
'',
'google.png' =>
'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAChE'.
'lEQVR42qWTXUgUURTH//fO7Kft6q7aViQ+hRQUGqSGRW9iaSiV'.
'9CDmUKT0UPSB5UMRfT5EBVJQ+jIkWBBE1EIIJRQZFkU9mOJHJR'.
'tsm2HlNrOzs7szc7u7D8720osH7uXCPefHOf9zDsESjWQvxthB'.
'i7F6wzA0/oYoAIJAkUxZSKUtOB0UXreQ9YRh8j8qeCmlrYsA0z'.
'RlHixlg11Ogi/fTTwYjiAWm0MmpeFnQgRxr0B9bQhNtT4UFohw'.
'OJxkEaDruswAye2kCL9V0T/wDNurKKo3lMHnK4Cm6RgajeHivd'.
'9oWK9h8HobPF6fDdCSSdklEun1LENXzyBONYto2NEAnz8AQkju'.
'iNTEDfkp/OICWlqaECgK2ICEpsqCKEqd16ahTNzH7StdCJSuhJ'.
'HJ2GJRCiOtI8NFcLs98Ho8eYBEXI7FRan5yBO01czj2OEOrgtb'.
'DM5qk3MmOXdYlgW/L6+ElP5HfjluSq3HH+Nyuwv725u5+sZ/2/'.
'cPwEyrcvhNQmo58Rxn92Rw+uhu3kIbIAokWwMIs0AFgcNNDliW'.
'n4EqR+ZS0uauD1gX/Iyh/lbw7udSF3jwVETDoxdReLmoY5NRHN'.
'oZRN2mtTZAURXZ7STSgUtjGAhPo+9kBTr3VkFNpHMucSWJXz++'.
'4u4rD/ruhBG+WostW7fZgLiiyA6RStHYPHZ1j2Dmm4Xe7mp0NJ'.
'bD5eAiWgyEp977cAFnzt/EcF8jqmtq8jJQVD5ITHI6BMx8msWF'.
'WyMYfp9AxZpy1G1cjbJQAR9igtF3E9CiozjXsw9VlZX5JXAAY1'.
'JOML4ImrqAsY+TGJ+KQtUZioNFWBXyIxR0odBfiKLi5SgtKbEB'.
'S97GpdhfG8EIICbggegAAAAASUVORK5CYII='.
'', 
'chat.png' =>
'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACuk'.
'lEQVR42nVSTU9TQRQ9r0A/oECCWojBhELb8NlQQ1EgLNmw1wQw'.
'bdgoO1cYUUKDyqIkJP4DEAjGlSKRHUgEpOHVjxJTrbaYKBGoII'.
'FCW/o13mlf9cXESU7mvTP3nnvuzBUgW243szOGKwzQ014rZOhj'.
'gkchwE3cgrVZmJPnCFJiAx0+UalRU14OqJRAfn4mIJ4AYqdA6A'.
'jYDdJ3HDt5ObhuuZgREtwiK6KKH8+ewfkKPTA4eAcu1zqmp6dR'.
'WFSIr4FN1Dc0pMVOTo6RSmpBFBIJ2K1WYVIQ3ewmxT00mTIVS3'.
'WlCP4MwrPhweyzWQwNDcHhcGB5eQWLiwvYIN5oMsPrBZJxtAui'.
'yFaNRrQWF0s9CZnOLRYLfL5PCIcjGBsbQzKZxMulJUyMj0On02'.
'F7B/j+DS+EdZGt1FSjTasF1tZcaG1twb/L7/fDYDBAo9GQYDjN'.
'RaN0sx7scAevTUa0FJGDyakp2G02mM1mDNweQFd3Vzp4k5qurK'.
'pESUkJ9vf30xzdAdxvcMwFbHTjj6qrgdnnT3Gtuwc2ux19fX1o'.
'bGzMOAgEYKiqQlNTE0RRTHMHv4DPfmqB/4jrbO1cKS5foCdUKP'.
'5adzqdqKurQ1lZGaxWK0ZHnejvv4VUCnj/jp44ibbsHGiJfEtO'.
'jFQIajX+u2Ix4IsfCJ9gprlZ6BHkh9TOXertAXfORSKRjKOENE'.
'yHNExBGialEvcsFsGRncQ/mJhwFdTWXjqkF0QoBPg+I0IjDMbY'.
'D9oOEonYzOHR9uPOTj3JgGUF8gjKkZGZio6Oq3NqVY6+gJ50b4'.
'9FvN7VG7297a8kgykJcQlR3hEX0BAK5+e37ms0BfWnsehBcHfL'.
'NzzcOxcIfDiVivBqCSmRc3wYQny6+aFKEtFK39xRLkEhS85WTk'.
'qVuUiE74IUmCshR5aYTWYy+3JwMfYbL0gjSeIk9N8AAAAASUVO'.
'RK5CYII='.
'',
               'bg-header-gray.png' =>
                      'iVBORw0KGgoAAAANSUhEUgAAAAUAAAAfCAIAAACgQJBPAAAAA3NCSVQICAjb4U/gA'.
                      'AAACXBIWXMAAAsSAAALEgHS3X78AAAAIXRFWHRTb2Z0d2FyZQBNYWNyb21lZGlhIE'.
                      'ZpcmV3b3JrcyA0LjDqJid1AAAAFnRFWHRDcmVhdGlvbiBUaW1lADEwLzI0LzA4KQ6'.
                      'r+wAAAClJREFUeJxjfPv2LQMSYPn//z8yn4kBFaDzqa0eXZ5U9QMtT6l5tFYPADsX'.
                      'LPcJwrwLAAAAAElFTkSuQmCC'
             ); 
             if(array_key_exists($_GET['mp3resource'],$resources)) {
		
				$content = base64_decode($resources[ $_GET['mp3resource'] ]);
		
				$lastMod = filemtime(__FILE__);
				$client = ( isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false );
				// Checking if the client is validating his cache and if it is current.
				if (isset($client) && (strtotime($client) == $lastMod)) {
					// Client's cache IS current, so we just respond '304 Not Modified'.
					header('Last-Modified: '.gmdate('D, d M Y H:i:s', $lastMod).' GMT', true, 304);
					exit;
				} else {
					// Image not cached or cache outdated, we respond '200 OK' and output the image.
					header('Last-Modified: '.gmdate('D, d M Y H:i:s', $lastMod).' GMT', true, 200);
					header('Content-Length: '.strlen($content));
					header('Content-Type: image/' . substr(strrchr($_GET['mp3resource'], '.'), 1) );
					echo $content;
					exit;
				}	
			}
		}
?>