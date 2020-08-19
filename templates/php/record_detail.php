<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <title>记录详情</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <style>
        .recordCard___1LQde.noShadow___XB_kF {
            box-shadow: none
        }

        .cardHeader___1YCqB {
            padding-bottom: 20px
        }

        .cardHeader___1YCqB.none___XMAKb {
            display: none
        }

        .root___19CTc .contentBox___3PENh .contentHeader___qfWKz .title___27TRa {
            font-size: 16px;
            font-weight: 400;
            display: inline-block
        }

        .root___2JRT9 .infoWrapper___-hydS {
            position: relative
        }

        .root___2JRT9 {
            background-color: #fff
        }

        .root___2JRT9 .infoWrapper___-hydS {
            position: relative
        }

        .root___2JRT9 .infoWrapper___-hydS .infoBox___2oM4x .title___3PKd4 {
            margin-bottom: 12px
        }

        .root___2JRT9 .infoWrapper___-hydS .infoBox___2oM4x .title___3PKd4 h3 {
            font-size: 20px
        }

        .root___2JRT9 .infoWrapper___-hydS .infoBox___2oM4x .rowBox___1n4wK {
            margin-top: 8px
        }

        .root___2JRT9 .infoWrapper___-hydS .infoBox___2oM4x .rowBox___1n4wK .infoItem___H85gK {
            color: rgba(0, 0, 0, .65);
            display: inline-block;
            min-width: 200px;
            max-width: 400px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            margin-right: 16px
        }

        .root___2JRT9 .infoWrapper___-hydS .infoBox___2oM4x .rowBox___1n4wK .infoItem___H85gK.logResult___1BtcK {
            font-weight: 700;
            color: rgba(0, 0, 0, .87)
        }

        .root___2JRT9 .infoWrapper___-hydS .infoBox___2oM4x .rowBox___1n4wK .infoItem___H85gK span {
            font-size: 14px;
            color: rgba(0, 0, 0, .87);
            font-weight: 400
        }

        .root___2JRT9 .infoWrapper___-hydS .infoBox___2oM4x .rowBox___1n4wK .infoItem___H85gK .viewNotary___3_wcQ {
            margin-left: 4px;
            display: inline-block
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 {
            position: absolute;
            top: 0;
            right: 0
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .previewBtn___2K6dw {
            background-color: #166bc7 !important;
            color: #fff;
            border-color: #166bc7 !important;
            margin-left: 8px
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .previewBtn___2K6dw:hover {
            color: #fff !important
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .previewBtn___2K6dw:focus {
            color: #fff !important
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .previewBtn___2K6dw[disabled] {
            color: rgba(0, 0, 0, .25);
            border-color: #d9d9d9 !important;
            background-color: #f5f5f5 !important
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .previewBtn___2K6dw[disabled]:hover {
            color: rgba(0, 0, 0, .25) !important
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .leftBtn___2rjp6 {
            margin-left: 8px
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .ant-btn > span + .anticon {
            margin-left: 4px
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .ant-btn:focus, .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .ant-btn:hover {
            color: #166bc7;
            border-color: #166bc7 !important
        }

        .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .ant-btn[disabled]:hover, .root___2JRT9 .infoWrapper___-hydS .actionBox___2YBi0 .ant-btn[focus]:hover {
            color: rgba(0, 0, 0, .25);
            border-color: #d9d9d9 !important
        }

        .root___2JRT9 .infoWrapper___-hydS .loadingBox___mH5q4 {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: hsla(0, 0%, 100%, .7)
        }

        .root___2JRT9 .infoWrapper___-hydS .loadingBox___mH5q4 .loadingIcon___3qd4- {
            position: absolute;
            top: 50%;
            left: 50%
        }

        .root___19CTc .headerBox___3LCBW {
            padding: 24px 32px;
            background: #fff
        }

        .root___19CTc .contentBox___3PENh {
            background-color: #fff
        }

        .root___19CTc .contentBox___3PENh .contentHeader___qfWKz {
            border-bottom: 1px solid #e8e8e8
        }

        .root___19CTc .contentBox___3PENh .contentHeader___qfWKz .title___27TRa {
            font-size: 16px;
            font-weight: 400;
            display: inline-block
        }

        .root___19CTc {
            width: 1200px;
            margin: 0 auto
        }

        .root___19CTc.winWidth___3jFJw {
            width: 90%
        }

        .root___19CTc .headerBox___3LCBW {
            padding: 24px 32px;
            background: #fff
        }

        .root___19CTc .contentBox___3PENh {
            margin-top: 16px;
            background-color: #fff
        }

        .root___19CTc .contentBox___3PENh .contentHeader___qfWKz {
            border-bottom: 1px solid #e8e8e8
        }

        .root___19CTc .contentBox___3PENh .contentHeader___qfWKz .title___27TRa {
            font-size: 16px;
            font-weight: 400;
            display: inline-block
        }

        .listItem___17Gz1 i.anticon-cli-check-o {
            color: #4caf50
        }

        .listItem___17Gz1 i.anticon-cli-close-o {
            color: #e64340
        }

        .siderMenu___3lxP- .cliIcon.anticon.anticon-cli-general {
            font-weight: 400
        }

        #frontRoot .ant-layout {
            background-color: inherit
        }

        .expandCard___2Qu10 {
            padding-bottom: 16px
        }

        .expandCard___2Qu10 .cardBody___2Qkic {
            display: block
        }

        .recordCard___1LQde {
            padding: 24px 32px 0;
            background: #fff;
            box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .08);
            margin-bottom: 16px
        }

        .recordCard___1LQde.noShadow___XB_kF {
            box-shadow: none
        }

        .recordCard___1LQde.recordFromMyRecord___1T7mb {
            margin-bottom: 12px;
            border: 1px solid hsla(210, 8%, 51%, .25);
            box-shadow: none;
            border-radius: 2px
        }

        .cardRow___WIKLO {
            display: -ms-flexbox;
            display: flex;
            line-height: 20px
        }

        .cardLabel___3Inmf {
            display: inline-block;
            vertical-align: top;
            width: 156px;
            font-size: 12px;
            color: #666;
            padding-right: 16px;
            padding-bottom: 4px
        }

        .cardValue___3r6bo {
            display: inline-block;
            vertical-align: top;
            font-size: 13px;
            color: #333;
            padding-bottom: 4px;
            word-break: break-all
        }

        .cardValue___3r6bo .viewImg___2gcIe {
            margin-left: 4px
        }

        .cardHeader___1YCqB {
            padding-bottom: 20px
        }

        .cardHeader___1YCqB.none___XMAKb {
            display: none
        }

        .cardBody___2Qkic {
            display: none;
            padding-top: 24px;
            border-top: 1px solid hsla(210, 8%, 51%, .13)
        }

        .cardBody___2Qkic.noPadding___1j1JS {
            padding-top: 0;
            border-top: none
        }

        .cardBody___2Qkic .cardLabel___3Inmf, .cardBody___2Qkic .cardValue___3r6bo {
            padding-bottom: 8px
        }

        .cardFilterUser___2rInA {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            margin-left: 8px
        }

        .cardFilterUser___2rInA .anticon-seen {
            margin-top: 1px;
            margin-right: 2px
        }

        .listValue___3HntV {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            color: rgba(0, 0, 0, .87)
        }

        .listValue___3HntV span {
            margin-bottom: 6px
        }

        .listValue___3HntV i {
            position: relative;
            top: 1px;
            font-size: 16px;
            margin-right: 6px
        }

        .listValue___3HntV i.anticon-cli-check-o {
            color: #4caf50
        }

        .listValue___3HntV i.anticon-cli-close-o {
            color: #e64340
        }

        .addressValue___n29sS .cliLink {
            margin-left: 16px
        }

        .addressValue___n29sS .cliLink i {
            font-size: 16px;
            vertical-align: middle;
            margin-right: 2px
        }

        .exporting___iV-kH .cliLink {
            margin-left: 8px
        }

        .tableValue___C8J4N {
            display: inline-block;
            border-top: 1px solid #d8d8d8;
            border-left: 1px solid #d8d8d8;
            margin-bottom: 8px;
            padding-bottom: 0 !important
        }

        .tableValue___C8J4N .tableRow____oddy {
            display: table-row;
            background: #fafafa
        }

        .tableValue___C8J4N .tableCol___2Q2WS {
            display: table-cell;
            vertical-align: middle;
            padding: 10px 12px;
            border-right: 1px solid #d8d8d8;
            border-bottom: 1px solid #d8d8d8
        }

        .tableValue___C8J4N .w100___1-4em {
            min-width: 100px
        }

        .tableValue___C8J4N .col2___2aeA8 {
            min-width: 200px;
            word-break: break-all
        }

        .imgValue___3pAav img {
            max-width: 100%;
            margin-right: 8px;
            margin-bottom: 8px;
            cursor: pointer
        }

        .signValue___cJ_Ez img {
            max-width: 100%;
            height: 115px;
            margin-right: 8px;
            margin-bottom: 8px;
            object-fit: contain;
            cursor: pointer
        }

        .videoValue___2lqb8 video {
            width: 300px;
            max-height: 225px;
            border-radius: 5px;
            background: #666
        }

        .groupValue___1Mvp_ {
            font-weight: 700;
            color: #666;
            font-size: 12px
        }

        .ant-layout {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex: auto;
            flex: auto
        }

        .ant-layout, .ant-layout * {
            box-sizing: border-box
        }

        .cliIcon {
            vertical-align: baseline;
        }

        .cliIcon:before {
            display: block;
            font-family: clifont, "sans-serif" !important;
        }

        .anticon {
            display: inline-block;
            font-style: normal;
            vertical-align: -.125em;
            text-align: center;
            text-transform: none;
            line-height: 1;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .anticon-cli-close-o:before {
            content: "\ce62d"
        }

        .anticon-cli-check-o:before {
            content: "\ce62e";
        }

        .ml8___12NCL {
            margin-left: 8px
        }

        body {
            margin: 0;
            font-family: Microsoft YaHei, PingFang SC, Helvetica Neue, Hiragino Sans GB, Noto Sans, Tahoma, Arial, simsun, "sans-serif";
            font-size: 14px;
            font-variant: tabular-nums;
            line-height: 1.5;
            color: rgba(0, 0, 0, .65);
            background-color: #fff;
        }

        *, :after, :before {
            box-sizing: border-box;
        }

        article, aside, blockquote, body, button, code, dd, details, div, dl, dt, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, hr, input, legend, li, menu, nav, ol, p, pre, section, td, textarea, th, ul {
            margin: 0;
            /* padding:0; */
        }
    </style>
</head>
<body>
<div class="ant-layout" style="overflow-x: visible;">
    <div class="root___19CTc winWidth___3jFJw">
        <div class="headerBox___3LCBW">
            <div class="root___2JRT9">
                <div class="infoWrapper___-hydS">
                    <div class="infoBox___2oM4x">
                        <div class="title___3PKd4"><h3>记录详情</h3></div>
                        <div class="rowBox___1n4wK">
                            <div class="infoItem___H85gK"><span>编号：</span><?php echo $data['owner_record_number']; ?>
                            </div>
                        </div>
                        <div class="rowBox___1n4wK">
                            <div class="infoItem___H85gK"><span>填表人：</span><?php echo $data['recorder']; ?></div>
                            <div class="infoItem___H85gK">
                                <span>填表时间：</span><?php echo date("Y-m-d H:i:s", $data['add_time']); ?></div>
                        </div>
                        <div class="rowBox___1n4wK">
                            <div class="infoItem___H85gK"><span>二维码名称：</span><?php echo $data['code_name']; ?></div>
                            <div class="infoItem___H85gK"><span>表单名称：</span><?php echo $data['name']; ?></div>
                        </div>
                        <div class="rowBox___1n4wK">
                            <div class="infoItem___H85gK logResult___1BtcK">
                                <span>记录结果：</span><?php echo $data['log_result']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentBox___3PENh">
            <div class="contentHeader___qfWKz"><h3 class="title___27TRa"></h3></div>
            <div class="recordCard___1LQde expandCard___2Qu10 noShadow___XB_kF">
                <div class="cardBody___2Qkic noPadding___1j1JS">
                    <?php
                    foreach ($data['tpl_groups'] as $index => $tpl_group) {
                        if (empty($tpl_group['fields'])) {
                            continue;
                        }
                        if ($index > 0) {
                            echo '<div class="cardRow___WIKLO"><div class="cardValue___3r6bo groupValue___1Mvp_">' . $tpl_group['title'] . '</div></div>';
                        }
                        foreach ($tpl_group['fields'] as $field) {
                            if (empty($field['type'])) {
                                continue;
                            }
                            echo '<div class="cardRow___WIKLO">';
                            echo '<div class="cardLabel___3Inmf">' . $field['title'] . '：</div>';
                            switch ($field['type']) {
                                case 'text':
                                case 'textarea':
                                case 'number':
                                case 'date':
                                case 'time':
                                case 'radio':
                                case 'name':
                                case 'recorder':
                                case 'job_number':
                                case 'chained_selects':
                                case 'tel':
                                case 'identity':
                                case 'carnumber':
                                case 'sex':
                                case 'customer_number':
                                    echo '<div class="cardValue___3r6bo"><span class="__sumSearchArea__">' . $field['value'] . '</span></div>';
                                    break;
                                case 'checkbox':
                                    echo '<div class="cardValue___3r6bo"><span class="__sumSearchArea__">';
                                    if (!empty($field['value'])) {
                                        echo implode('、', $field['value']);
                                    }
                                    echo '</span></div>';
                                    break;
                                case 'checklist':
                                    echo '<div class="cardValue___3r6bo"><span class="listValue___3HntV">';
                                    if (!empty($field['value'])) {
                                        foreach ($field['value'] as $v) {
                                            if ($v['value'] == 1) {
                                                echo '<span><i class="cliIcon anticon anticon-cli-check-o"></i><span class="__sumSearchArea__">' . $v['title'] . '</span></span>';
                                            } else {
                                                echo '<span><i class="cliIcon anticon anticon-cli-close-o"></i><span class="__sumSearchArea__">' . $v['title'] . '</span></span>';
                                            }
                                        }
                                    }
                                    echo '</div>';
                                    break;
                                case 'address':
                                    echo '<div class="cardValue___3r6bo addressValue___n29sS"><span class="__sumSearchArea__">';
                                    if (!empty($field['value']['address'])) {
                                        echo $field['value']['address'];
                                    }
                                    echo '</span></div>';
                                    break;
                                case 'matrix':
                                    echo '<div class="cardValue___3r6bo tableValue___C8J4N">';
                                    if (!empty($field['value'])) {
                                        foreach ($field['value'] as $v) {
                                            echo '<div class="tableRow____oddy">';
                                            echo '<div class="tableCol___2Q2WS w100___1-4em">' . $v['title'] . '</div>';
                                            echo '<div class="tableCol___2Q2WS col2___2aeA8">' . $v['value'] . '</div>';
                                            echo '</div>';
                                        }
                                    }
                                    echo '</div>';
                                    break;
                                case 'image':
                                case 'signature':
                                    echo '<div class="cardValue___3r6bo imgValue___3pAav">';
                                    if (!empty($field['value'])) {
                                        foreach ($field['value'] as $v) {
                                            if (empty($v['url'])) {
                                                continue;
                                            }
                                            echo '<img src="' . $v['url'] . '" alt="" style="max-width: 600px;">';
                                        }
                                    }
                                    echo '</div>';
                                    break;
                                case 'audio':
                                case 'video':
                                    echo '<div class="cardValue___3r6bo">----</div>';
                                    break;
                            }
                            echo '</div>';
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
