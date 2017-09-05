<form role="form" action="{{ route('CalcCoR') }}" method="post">
    {{ csrf_field() }}
    <div class="m-tickets-instantly">
        <div class="search">
            <div class="search2">
                <i class="fa fa-search"></i>
                <input name="moviename" type="text" value="搜索电影" onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = '搜索电影';}"/>
                <input name="email" type="hidden" class="form-control" value="{{ Auth::user()->email }}">
            </div>
        </div>
        <div class="m-select-movie">
            <select class="list_of_movies">
                <option value="">Select Movie</option>
                <optgroup label="Telugu">
                    <option style="padding-left: 10px;" value="ANAN">Asura (U/A)</option>
                    <option style="padding-left: 10px;" value="CHDM">Jurassic World (2D Telugu) (U/A)</option>
                    <option style="padding-left: 10px;" value="GUDR">Jurassic World (3D Telugu) (U/A)</option>
                    <option style="padding-left: 10px;" value="GUNT">Jyothi Lakshmi (U/A)</option>
                    <option style="padding-left: 10px;" value="JANG">Kerintha (U)</option>
                    <option style="padding-left: 10px;" value="KAKI">Krishnamma Kalipindi Iddarini (U/A)</option>
                    <option style="padding-left: 10px;" value="KURN">Lava Kusa (A)</option>
                    <option style="padding-left: 10px;" value="MART">Pandaga Chesko (U/A)</option>
                    <option style="padding-left: 10px;" value="PRVT">Tippu (A)</option>
                    <option style="padding-left: 10px;" value="RAJA">Vinavayya Ramayya (U/A)</option>
                </optgroup>
                <optgroup label="Hindi">
                    <option style="padding-left: 10px;" value="TAWA">ABCD 2 (3D) (U)</option>
                    <option style="padding-left: 10px;" value="ZIRO">ABCD 2 (2D) (U)</option>
                </optgroup>
                <optgroup label="English">
                    <option style="padding-left: 10px;" value="DIB">Jurassic World (3D) (U/A)</option>
                    <option style="padding-left: 10px;" value="GUW">Guwahati</option>
                </optgroup>
            </select>
        </div>
        <div class="m-select-date">
            <select class="list_of_movies">
                <option value="">Select Date</option>
                <option style="padding-left: 10px;" value="ANAN">Today, 18 jun</option>
                <option style="padding-left: 10px;" value="CHDM">Tomorrow, 19 jun</option>
                <option style="padding-left: 10px;" value="CHDM">saturday, 20 jun</option>
                <option style="padding-left: 10px;" value="CHDM">sunday, 21 jun</option>
            </select>
        </div>
        <div class="m-select">
            <label><input id="rdbMovie" name="rdbMovieSearch" type="radio" class="checkins"
                          onclick="fnOcCriteria('ET', 'MT');" checked="checked">
                <span class="fleft mr20">Movies</span></label>
            <label><input id="rdbCinema" name="rdbMovieSearch" type="radio" class="checkins"
                          onclick="fnOcCriteria('VN', 'MT');" checked="checked">
                <span class="fleft mr20">Cinemas</span></label>
        </div>
        <div class="m-select-button">
            <button type="submit" class="btn btn-primary">搜索</button>
        </div>
        <div class="clearfix"></div>
    </div>
</form>