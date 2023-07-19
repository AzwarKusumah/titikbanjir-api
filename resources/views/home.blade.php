<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Halaman Home</title>
</head>
<body>
    <div class="navbar">
        <div class="user-dropdown">
            <button onclick="toggleDropdown()">{{ auth()->user()->name }}</button>
            <div class="user-dropdown-content" id="dropdown-content">
                <a href="/profile">Profile</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <h1>Dokumentasi Penggunaan API TitikBanjir</h1>
            <hr/>
            <p style="margin-top:25px; margin-bottom:75px">Dokumentasi ini menjelaskan bagaimana API TitikBanjir dapat digunakan. API TitikBanjir merupakan API yang menampilkan TitikBanjir dan Titik Pengungsian pada setiap Kelurahan dan Kecamatan.
                API ini dibuat berdasarkan kasus yang terjadi pada Makassar pada tahun 2018-2023 yang dimana volume air meningkat sehingga menyebabkan banjir pada beberapa titik di kota Makassar
            </p>
            <div>
                <h2>Kecamatan Endpoint</h2>
                <hr/>
                <h2>Ringkasan</h2>
                <p>Method "kecamatan"digunakan untuk mendapatkan daftar daftar kecamatan yang ada pada kota makassar</p>
            </div>

            <!-- TAB -->
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Url')" id="defaultOpen">Url</button>
                <button class="tablinks" onclick="openTab(event, 'Parameter')">Parameter</button>
                <button class="tablinks" onclick="openTab(event, 'Request')">Request</button>
            </div>

            <div id="Url" class="tabcontent">
                <table>
                    <tr>
                        <th>METHOD</th>
                        <th>URL</th>
                    </tr>
                    <tr>
                        <td>GET</td>
                        <td>http://127.0.0.1:8000/api/kecamatan</td>
                    </tr>
                </table>
            </div>

            <div id="Parameter" class="tabcontent">
                <table>
                    <tr>
                        <th>METHOD</th>
                        <th>PARAMETER</th>
                        <th>WAJIB</th>
                        <th>TIPE</th>
                        <th>KETERANGAN</th>
                    </tr>
                    <tr>
                        <td>GET/HEAD</td>
                        <td>X-API-KEY</td>
                        <td>Ya</td>
                        <td>String</td>
                        <td>Api Key</td>
                    </tr>
                </table>
            </div>

            <div id="Request" class="tabcontent">
                <div class="subtab">
                    <button class="subtablinks" onclick="openSubtab(event, 'Javascript')">Javascript</button>
                    <button class="subtablinks" onclick="openSubtab(event, 'PHP')">PHP</button>
                    <button class="subtablinks" onclick="openSubtab(event, 'Python')">Python</button>
                </div>
                <div id="Javascript" class="subtabcontent">
                    <script src="https://gist.github.com/AzwarKusumah/b1dcfc968905ce495b171a8355e1a472.js"></script>
                </div>
                <div id="PHP" class="subtabcontent">
                    <script src="https://gist.github.com/AzwarKusumah/e3ecdc0855174ebdbc67ba70c5a393e7.js"></script>
                </div>
                <div id="Python" class="subtabcontent">
                    <script src="https://gist.github.com/AzwarKusumah/1d2a594471e9ccee6e7e192efd1148d2.js"></script>
                </div>
            </div>

            <h2>Response</h2>

            <!-- NEW TAB NAVIGATION -->
            <div class="new-tab">
                <button class="new-tablinks" onclick="openNewTab(event, 'NewTab1')" id="defaultNewTab">Response Berhasil</button>
                <button class="new-tablinks" onclick="openNewTab(event, 'NewTab2')">Response Gagal</button>
            </div>

            <div id="NewTab1" class="new-tabcontent">
                 <script src="https://gist.github.com/AzwarKusumah/ad3cdaf284f9122a3018c09b379f91b7.js"></script>
            </div>

            <div id="NewTab2" class="new-tabcontent">
                <script src="https://gist.github.com/AzwarKusumah/909292224b8bea44249bf5ff85523c2f.js"></script>
            </div>

            <div>
                <h2 style="margin-top:30px;">Kelurahan Endpoint</h2>
                <hr/>
                <h2>Ringkasan</h2>
                <p>Endpoint "kelurahan" digunakan untuk mendapatkan daftar daftar Kelurahan yang ada pada berbagai kecamatan pada kota Makassar</p>
            </div>

            <div class="new2-tab">
                <button class="new2-tablinks" onclick="openNewTwoTab(event, 'New2Tab1')" id="defaultNew2Tab">Url</button>
                <button class="new2-tablinks" onclick="openNewTwoTab(event, 'New2Tab2')">Parameter</button>
                <button class="new2-tablinks" onclick="openNewTwoTab(event, 'New2Tab3')">Request</button>
            </div>

            <div id="New2Tab1" class="new2-tabcontent">
                <table>
                    <tr>
                        <th>METHOD</th>
                        <th>URL</th>
                    </tr>
                    <tr>
                        <td>GET</td>
                        <td>http://127.0.0.1:8000/api/kelurahan?id={number}</td>
                    </tr>
                </table>
            </div>

            <div id="New2Tab2" class="new2-tabcontent">
                <table>
                    <tr>
                        <th>METHOD</th>
                        <th>PARAMETER</th>
                        <th>WAJIB</th>
                        <th>TIPE</th>
                        <th>KETERANGAN</th>
                    </tr>
                    <tr>
                        <td>GET/HEAD</td>
                        <td>X-API-KEY</td>
                        <td>Ya</td>
                        <td>String</td>
                        <td>Api Key</td>
                    </tr>
                    <tr>
                        <td>GET</td>
                        <td>id</td>
                        <td>Ya</td>
                        <td>String</td>
                        <td>ID Kelurahan,Lokasi Banjir,Titik Maps</td>
                    </tr>
                </table>
            </div>

            <div id="New2Tab3" class="new2-tabcontent">
                <div class="subtab2">
                    <button class="subtablinks2" onclick="openSubtabTwo(event, 'Javascript2')">Javascript</button>
                    <button class="subtablinks2" onclick="openSubtabTwo(event, 'PHP2')">PHP</button>
                    <button class="subtablinks2" onclick="openSubtabTwo(event, 'Python2')">Python</button>
                </div>
                <div id="Javascript2" class="subtabcontent2">
                    <script src="https://gist.github.com/AzwarKusumah/f3ec73a4f2b5d18f291be1d1fe313e77.js"></script>
                </div>
                <div id="PHP2" class="subtabcontent2">
                    <script src="https://gist.github.com/AzwarKusumah/4a7c303e50b60e7cb20b053f2b3fafc1.js"></script>
                </div>
                <div id="Python2" class="subtabcontent2">
                    <script src="https://gist.github.com/AzwarKusumah/712c0e40a869cfdaac80e50cf3a691d3.js"></script>
                </div>
            </div>
                <h2>Response</h2>

                <!-- NEW TAB NAVIGATION -->
                <div class="new3-tab">
                    <button class="new3-tablinks" onclick="openNewTreeTab(event, 'New3Tab1')" id="defaultNew3Tab">Response Berhasil</button>
                    <button class="new3-tablinks" onclick="openNewTreeTab(event, 'New3Tab2')">Response Gagal</button>
                </div>

                <div id="New3Tab1" class="new3-tabcontent">
                    <script src="https://gist.github.com/AzwarKusumah/eba441498b6748080fcb1951f9115647.js"></script>
                </div>

                <div id="New3Tab2" class="new3-tabcontent">
                    <script src="https://gist.github.com/AzwarKusumah/72191594ab1466cb82ca92d7ff695aeb.js"></script>
                </div>
        </div>
        
        <script>
            function toggleDropdown() {
                var dropdownContent = document.getElementById("dropdown-content");
                dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
            }

            function openTab(evt, tabName) {
                var tabcontent, tablinks;

                tabcontent = document.getElementsByClassName("tabcontent");
                for (var i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                tablinks = document.getElementsByClassName("tablinks");
                for (var i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";

                if (tabName === 'Request') {
                openSubtab(event, 'Javascript'); 
                
                }
            }

            function openSubtab(evt, subtabName) {
                var subtabcontent, subtablinks;

                subtabcontent = document.getElementsByClassName("subtabcontent");
                for (var i = 0; i < subtabcontent.length; i++) {
                    subtabcontent[i].style.display = "none";
                }

                subtablinks = document.getElementsByClassName("subtablinks");
                for (var i = 0; i < subtablinks.length; i++) {
                    subtablinks[i].className = subtablinks[i].className.replace(" active", "");
                }

                document.getElementById(subtabName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            function openSubtabTwo(evt, subtabName) {
                var subtabcontent, subtablinks;

                subtabcontent = document.getElementsByClassName("subtabcontent2");
                for (var i = 0; i < subtabcontent.length; i++) {
                    subtabcontent[i].style.display = "none";
                }

                subtablinks = document.getElementsByClassName("subtablinks2");
                for (var i = 0; i < subtablinks.length; i++) {
                    subtablinks[i].className = subtablinks[i].className.replace("active", "");
                }

                document.getElementById(subtabName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            function openNewTab(evt, newTabName) {
                var newTabcontent, newTablinks;

                newTabcontent = document.getElementsByClassName("new-tabcontent");
                for (var i = 0; i < newTabcontent.length; i++) {
                    newTabcontent[i].style.display = "none";
                }

                newTablinks = document.getElementsByClassName("new-tablinks");
                for (var i = 0; i < newTablinks.length; i++) {
                    newTablinks[i].className = newTablinks[i].className.replace(" active", "");
                }

                document.getElementById(newTabName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            function openNewTwoTab(evt, newTabName) {
                var newTabcontent, newTablinks;

                newTabcontent = document.getElementsByClassName("new2-tabcontent");
                for (var i = 0; i < newTabcontent.length; i++) {
                    newTabcontent[i].style.display = "none";
                }

                newTablinks = document.getElementsByClassName("new2-tablinks");
                for (var i = 0; i < newTablinks.length; i++) {
                    newTablinks[i].className = newTablinks[i].className.replace(" active", "");
                }

                document.getElementById(newTabName).style.display = "block";
                evt.currentTarget.className += " active";

                if (newTabName === 'New2Tab3') {
                openSubtab(event, 'Javascript2'); 
                
                }
            }

            function openNewTreeTab(evt, newTabName) {
                var newTabcontent, newTablinks;

                newTabcontent = document.getElementsByClassName("new3-tabcontent");
                for (var i = 0; i < newTabcontent.length; i++) {
                    newTabcontent[i].style.display = "none";
                }

                newTablinks = document.getElementsByClassName("new3-tablinks");
                for (var i = 0; i < newTablinks.length; i++) {
                    newTablinks[i].className = newTablinks[i].className.replace(" active", "");
                }

                document.getElementById(newTabName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            document.getElementById("defaultOpen").click();
            document.getElementById("defaultNewTab").click();
            document.getElementById("defaultNew2Tab").click();
            document.getElementById("defaultNew3Tab").click();
        </script>
    </div>
</body>
</html>
