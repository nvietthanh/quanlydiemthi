<link rel="stylesheet" href="../public/css/mainscore.css">
<div class="search-score">
    <div class="search-score-wrap">
        <span>Nhập mã học sinh: </span>
        <input type="text" name="idsearch" placeholder="Nhập mã học sinh">
    </div>
    <div class="container-table">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td rowspan="3" width="2.5%">STT</td>
                    <td rowspan="3" width="12%">Họ tên</td>
                    <td rowspan="3" width="6%">Ngày sinh</td>
                    <td rowspan="1" width="20%" colspan="11">Điểm hệ số 1</td>
                    <td rowspan="1" width="24%" colspan="7">Điểm hệ số 2</td>
                    <td rowspan="1" width="3%">HK</td>
                    <td rowspan="1" width="5%">TBHK1</td>
                    <td rowspan="1" width="5%">TBHK2</td>
                    <td rowspan="1" width="5%">TBCN</td>
                </tr>
                <tr>
                    <td colspan="4">Miệng</td>
                    <td colspan="4">Viết</td>
                    <td colspan="3">Thực hành</td>
                    <td colspan="4">Viết</td>
                    <td colspan="3">Thực hành</td>
                    <td rowspan="2">19</td>
                    <td rowspan="2">20</td>
                    <td rowspan="2">21</td>
                    <td rowspan="2">22</td>
                </tr>
                <tr>
                    <?php
                        for($i=1 ; $i <= 18 ; $i++){
                            echo '<td width="3.5%">' .$i. '</td>';
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>