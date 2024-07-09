<section class="px-4 pt-8 sm:px-6">
    {{-- Title --}}
    <x-pages.page-title title="Dashboard" />

    <div class="mt-2 font-medium text-gray-500">Hai {{ auth()->user()->name }}, {{ greeting() }}</div>

    {{-- Content Title --}}
    <div class="mb-6 mt-10">
        {{-- Row 1 --}}
        <div class="grid gap-4 xl:grid-cols-2 2xl:grid-cols-3">
            <!-- Main widget -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex-shrink-0">
                        <span
                            class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">$45,385</span>
                        <h3 class="text-base font-light text-gray-500 dark:text-gray-400">Sales this week</h3>
                    </div>
                    <div
                        class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
                        12.5%
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div id="main-chart" style="min-height: 435px;">
                    <div id="apexcharts0udw2vay" class="apexcharts-canvas apexcharts0udw2vay apexcharts-theme-light"
                        style="width: 1017px; height: 420px;"><svg id="SvgjsSvg1351" width="1017" height="420"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                            xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <foreignObject x="0" y="0" width="1017" height="420">
                                <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                    xmlns="http://www.w3.org/1999/xhtml"
                                    style="inset: auto 0px 1px; position: absolute; max-height: 210px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="Revenue"
                                        data:collapsed="false" style="margin: 2px 10px;"><span
                                            class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                            style="background: rgb(26, 86, 219); color: rgb(26, 86, 219); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                            class="apexcharts-legend-text" rel="1" i="0"
                                            data:default-text="Revenue" data:collapsed="false"
                                            style="color: rgb(156, 163, 175); font-size: 14px; font-weight: 500; font-family: Inter, sans-serif;">Revenue</span>
                                    </div>
                                    <div class="apexcharts-legend-series" rel="2"
                                        seriesname="Revenuexxpreviousxperiodx" data:collapsed="false"
                                        style="margin: 2px 10px;"><span class="apexcharts-legend-marker" rel="2"
                                            data:collapsed="false"
                                            style="background: rgb(253, 186, 140); color: rgb(253, 186, 140); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                            class="apexcharts-legend-text" rel="2" i="1"
                                            data:default-text="Revenue%20(previous%20period)" data:collapsed="false"
                                            style="color: rgb(156, 163, 175); font-size: 14px; font-weight: 500; font-family: Inter, sans-serif;">Revenue
                                            (previous period)</span></div>
                                </div>
                                <style type="text/css">
                                    .apexcharts-legend {
                                        display: flex;
                                        overflow: auto;
                                        padding: 0 10px;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom,
                                    .apexcharts-legend.apx-legend-position-top {
                                        flex-wrap: wrap
                                    }

                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        flex-direction: column;
                                        bottom: 0;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        justify-content: flex-start;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                        justify-content: center;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                        justify-content: flex-end;
                                    }

                                    .apexcharts-legend-series {
                                        cursor: pointer;
                                        line-height: normal;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                        display: flex;
                                        align-items: center;
                                    }

                                    .apexcharts-legend-text {
                                        position: relative;
                                        font-size: 14px;
                                    }

                                    .apexcharts-legend-text *,
                                    .apexcharts-legend-marker * {
                                        pointer-events: none;
                                    }

                                    .apexcharts-legend-marker {
                                        position: relative;
                                        display: inline-block;
                                        cursor: pointer;
                                        margin-right: 3px;
                                        border-style: solid;
                                    }

                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                        display: inline-block;
                                    }

                                    .apexcharts-legend-series.apexcharts-no-click {
                                        cursor: auto;
                                    }

                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                        display: none !important;
                                    }

                                    .apexcharts-inactive-legend {
                                        opacity: 0.45;
                                    }
                                </style>
                            </foreignObject>
                            <g id="SvgjsG1353" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(94.03974914550781, 30)">
                                <defs id="SvgjsDefs1352">
                                    <clipPath id="gridRectMask0udw2vay">
                                        <rect id="SvgjsRect1359" width="897.3537368774414" height="315.494" x="-4"
                                            y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask0udw2vay"></clipPath>
                                    <clipPath id="nonForecastMask0udw2vay"></clipPath>
                                    <clipPath id="gridRectMarkerMask0udw2vay">
                                        <rect id="SvgjsRect1360" width="913.3537368774414" height="335.494" x="-12"
                                            y="-12" rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient1378" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop1379" stop-opacity="0" stop-color="rgba(26,86,219,0)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop1380" stop-opacity="0.15"
                                            stop-color="rgba(141,171,237,0.15)" offset="1"></stop>
                                        <stop id="SvgjsStop1381" stop-opacity="0.15"
                                            stop-color="rgba(141,171,237,0.15)" offset="1"></stop>
                                    </linearGradient>
                                    <linearGradient id="SvgjsLinearGradient1400" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop1401" stop-opacity="0" stop-color="rgba(253,186,140,0)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop1402" stop-opacity="0.15"
                                            stop-color="rgba(254,221,198,0.15)" offset="1"></stop>
                                        <stop id="SvgjsStop1403" stop-opacity="0.15"
                                            stop-color="rgba(254,221,198,0.15)" offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine1358" x1="-0.5" y1="0" x2="-0.5"
                                    y2="311.494" stroke="#374151" stroke-dasharray="10" stroke-linecap="butt"
                                    class="apexcharts-xcrosshairs apexcharts-active" x="-0.5" y="0" width="1"
                                    height="311.494" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                    stroke-width="1"></line>
                                <g id="SvgjsG1406" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1407" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        <text id="SvgjsText1409" font-family="Inter, sans-serif" x="0" y="340.494"
                                            text-anchor="middle" dominant-baseline="auto" font-size="14px"
                                            font-weight="500" fill="#9ca3af"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan1410">01 Feb</tspan>
                                            <title>01 Feb</title>
                                        </text><text id="SvgjsText1412" font-family="Inter, sans-serif"
                                            x="148.22562281290692" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500"
                                            fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan1413">02 Feb</tspan>
                                            <title>02 Feb</title>
                                        </text><text id="SvgjsText1415" font-family="Inter, sans-serif"
                                            x="296.4512456258138" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500"
                                            fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan1416">03 Feb</tspan>
                                            <title>03 Feb</title>
                                        </text><text id="SvgjsText1418" font-family="Inter, sans-serif"
                                            x="444.67686843872065" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500"
                                            fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan1419">04 Feb</tspan>
                                            <title>04 Feb</title>
                                        </text><text id="SvgjsText1421" font-family="Inter, sans-serif"
                                            x="592.9024912516275" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500"
                                            fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan1422">05 Feb</tspan>
                                            <title>05 Feb</title>
                                        </text><text id="SvgjsText1424" font-family="Inter, sans-serif"
                                            x="741.1281140645343" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500"
                                            fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan1425">06 Feb</tspan>
                                            <title>06 Feb</title>
                                        </text><text id="SvgjsText1427" font-family="Inter, sans-serif"
                                            x="889.3537368774412" y="340.494" text-anchor="middle"
                                            dominant-baseline="auto" font-size="14px" font-weight="500"
                                            fill="#9ca3af" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Inter, sans-serif;">
                                            <tspan id="SvgjsTspan1428">07 Feb</tspan>
                                            <title>07 Feb</title>
                                        </text>
                                    </g>
                                    <line id="SvgjsLine1429" x1="0" y1="312.494" x2="889.3537368774414"
                                        y2="312.494" stroke="#374151" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1442" class="apexcharts-grid">
                                    <g id="SvgjsG1443" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine1452" x1="0" y1="0"
                                            x2="889.3537368774414" y2="0" stroke="#374151"
                                            stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1453" x1="0" y1="77.8735"
                                            x2="889.3537368774414" y2="77.8735" stroke="#374151"
                                            stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1454" x1="0" y1="155.747"
                                            x2="889.3537368774414" y2="155.747" stroke="#374151"
                                            stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1455" x1="0" y1="233.62050000000002"
                                            x2="889.3537368774414" y2="233.62050000000002" stroke="#374151"
                                            stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1456" x1="0" y1="311.494"
                                            x2="889.3537368774414" y2="311.494" stroke="#374151"
                                            stroke-dasharray="1" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1444" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine1445" x1="0" y1="312.494" x2="0"
                                        y2="318.494" stroke="#374151" stroke-dasharray="0" stroke-linecap="butt"
                                        class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1446" x1="148.2256228129069" y1="312.494"
                                        x2="148.2256228129069" y2="318.494" stroke="#374151" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1447" x1="296.4512456258138" y1="312.494"
                                        x2="296.4512456258138" y2="318.494" stroke="#374151" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1448" x1="444.6768684387207" y1="312.494"
                                        x2="444.6768684387207" y2="318.494" stroke="#374151" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1449" x1="592.9024912516276" y1="312.494"
                                        x2="592.9024912516276" y2="318.494" stroke="#374151" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1450" x1="741.1281140645344" y1="312.494"
                                        x2="741.1281140645344" y2="318.494" stroke="#374151" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1451" x1="889.3537368774413" y1="312.494"
                                        x2="889.3537368774413" y2="318.494" stroke="#374151" stroke-dasharray="0"
                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                    <line id="SvgjsLine1458" x1="0" y1="311.494" x2="889.3537368774414"
                                        y2="311.494" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1457" x1="0" y1="1" x2="0"
                                        y2="311.494" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1361" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1362" class="apexcharts-series" seriesName="Revenue"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1382"
                                            d="M 0 311.494L 0 172.87917000000016C 51.87896798451741 172.87917000000016 96.34665482838949 226.61188500000026 148.2256228129069 226.61188500000026C 200.1045907974243 226.61188500000026 244.57227764129638 250.75266999999985 296.4512456258138 250.75266999999985C 348.3302136103312 250.75266999999985 392.7979004542033 106.68669499999987 444.6768684387207 106.68669499999987C 496.55583642323813 106.68669499999987 541.0235232671101 172.87917000000016 592.9024912516276 172.87917000000016C 644.781459236145 172.87917000000016 689.2491460800171 211.81592 741.1281140645345 211.81592C 793.007082049052 211.81592 837.474768892924 289.68942000000015 889.3537368774414 289.68942000000015C 889.3537368774414 289.68942000000015 889.3537368774414 289.68942000000015 889.3537368774414 311.494M 889.3537368774414 289.68942000000015z"
                                            fill="url(#SvgjsLinearGradient1378)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="0"
                                            clip-path="url(#gridRectMask0udw2vay)"
                                            pathTo="M 0 311.494L 0 172.87917000000016C 51.87896798451741 172.87917000000016 96.34665482838949 226.61188500000026 148.2256228129069 226.61188500000026C 200.1045907974243 226.61188500000026 244.57227764129638 250.75266999999985 296.4512456258138 250.75266999999985C 348.3302136103312 250.75266999999985 392.7979004542033 106.68669499999987 444.6768684387207 106.68669499999987C 496.55583642323813 106.68669499999987 541.0235232671101 172.87917000000016 592.9024912516276 172.87917000000016C 644.781459236145 172.87917000000016 689.2491460800171 211.81592 741.1281140645345 211.81592C 793.007082049052 211.81592 837.474768892924 289.68942000000015 889.3537368774414 289.68942000000015C 889.3537368774414 289.68942000000015 889.3537368774414 289.68942000000015 889.3537368774414 311.494M 889.3537368774414 289.68942000000015z"
                                            pathFrom="M -1 2647.699L -1 2647.699L 148.2256228129069 2647.699L 296.4512456258138 2647.699L 444.6768684387207 2647.699L 592.9024912516276 2647.699L 741.1281140645345 2647.699L 889.3537368774414 2647.699">
                                        </path>
                                        <path id="SvgjsPath1383"
                                            d="M 0 172.87917000000016C 51.87896798451741 172.87917000000016 96.34665482838949 226.61188500000026 148.2256228129069 226.61188500000026C 200.1045907974243 226.61188500000026 244.57227764129638 250.75266999999985 296.4512456258138 250.75266999999985C 348.3302136103312 250.75266999999985 392.7979004542033 106.68669499999987 444.6768684387207 106.68669499999987C 496.55583642323813 106.68669499999987 541.0235232671101 172.87917000000016 592.9024912516276 172.87917000000016C 644.781459236145 172.87917000000016 689.2491460800171 211.81592 741.1281140645345 211.81592C 793.007082049052 211.81592 837.474768892924 289.68942000000015 889.3537368774414 289.68942000000015"
                                            fill="none" fill-opacity="1" stroke="#1a56db" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                            class="apexcharts-area" index="0"
                                            clip-path="url(#gridRectMask0udw2vay)"
                                            pathTo="M 0 172.87917000000016C 51.87896798451741 172.87917000000016 96.34665482838949 226.61188500000026 148.2256228129069 226.61188500000026C 200.1045907974243 226.61188500000026 244.57227764129638 250.75266999999985 296.4512456258138 250.75266999999985C 348.3302136103312 250.75266999999985 392.7979004542033 106.68669499999987 444.6768684387207 106.68669499999987C 496.55583642323813 106.68669499999987 541.0235232671101 172.87917000000016 592.9024912516276 172.87917000000016C 644.781459236145 172.87917000000016 689.2491460800171 211.81592 741.1281140645345 211.81592C 793.007082049052 211.81592 837.474768892924 289.68942000000015 889.3537368774414 289.68942000000015"
                                            pathFrom="M -1 2647.699L -1 2647.699L 148.2256228129069 2647.699L 296.4512456258138 2647.699L 444.6768684387207 2647.699L 592.9024912516276 2647.699L 741.1281140645345 2647.699L 889.3537368774414 2647.699">
                                        </path>
                                        <g id="SvgjsG1363" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g id="SvgjsG1365" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1366" r="8" cx="0"
                                                    cy="172.87917000000016"
                                                    class="apexcharts-marker no-pointer-events wo6vfahav"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                    index="0" default-marker-size="5"></circle>
                                                <circle id="SvgjsCircle1367" r="5" cx="148.2256228129069"
                                                    cy="226.61188500000026"
                                                    class="apexcharts-marker no-pointer-events wfzmx22ro"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                    index="0" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1368" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1369" r="5" cx="296.4512456258138"
                                                    cy="250.75266999999985"
                                                    class="apexcharts-marker no-pointer-events w0ufs7fh9j"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                    index="0" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1370" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1371" r="5" cx="444.6768684387207"
                                                    cy="106.68669499999987"
                                                    class="apexcharts-marker no-pointer-events wugeoojfe"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                    index="0" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1372" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1373" r="5" cx="592.9024912516276"
                                                    cy="172.87917000000016"
                                                    class="apexcharts-marker no-pointer-events wwtwqo7c1k"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                    index="0" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1374" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1375" r="5" cx="741.1281140645345"
                                                    cy="211.81592"
                                                    class="apexcharts-marker no-pointer-events wgpyp29e4"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                    index="0" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1376" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1377" r="5" cx="889.3537368774414"
                                                    cy="289.68942000000015"
                                                    class="apexcharts-marker no-pointer-events wq4z5kxk5k"
                                                    stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                    index="0" default-marker-size="5"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1384" class="apexcharts-series"
                                        seriesName="Revenuexxpreviousxperiodx" data:longestSeries="true"
                                        rel="2" data:realIndex="1">
                                        <path id="SvgjsPath1404"
                                            d="M 0 311.494L 0 95.00567000000001C 51.87896798451741 95.00567000000001 96.34665482838949 29.202562500000113 148.2256228129069 29.202562500000113C 200.1045907974243 29.202562500000113 244.57227764129638 146.40218000000004 296.4512456258138 146.40218000000004C 348.3302136103312 146.40218000000004 392.7979004542033 172.87917000000016 444.6768684387207 172.87917000000016C 496.55583642323813 172.87917000000016 541.0235232671101 83.32464500000015 592.9024912516276 83.32464500000015C 644.781459236145 83.32464500000015 689.2491460800171 17.13216999999986 741.1281140645345 17.13216999999986C 793.007082049052 17.13216999999986 837.474768892924 71.64361999999983 889.3537368774414 71.64361999999983C 889.3537368774414 71.64361999999983 889.3537368774414 71.64361999999983 889.3537368774414 311.494M 889.3537368774414 71.64361999999983z"
                                            fill="url(#SvgjsLinearGradient1400)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="1"
                                            clip-path="url(#gridRectMask0udw2vay)"
                                            pathTo="M 0 311.494L 0 95.00567000000001C 51.87896798451741 95.00567000000001 96.34665482838949 29.202562500000113 148.2256228129069 29.202562500000113C 200.1045907974243 29.202562500000113 244.57227764129638 146.40218000000004 296.4512456258138 146.40218000000004C 348.3302136103312 146.40218000000004 392.7979004542033 172.87917000000016 444.6768684387207 172.87917000000016C 496.55583642323813 172.87917000000016 541.0235232671101 83.32464500000015 592.9024912516276 83.32464500000015C 644.781459236145 83.32464500000015 689.2491460800171 17.13216999999986 741.1281140645345 17.13216999999986C 793.007082049052 17.13216999999986 837.474768892924 71.64361999999983 889.3537368774414 71.64361999999983C 889.3537368774414 71.64361999999983 889.3537368774414 71.64361999999983 889.3537368774414 311.494M 889.3537368774414 71.64361999999983z"
                                            pathFrom="M -1 2647.699L -1 2647.699L 148.2256228129069 2647.699L 296.4512456258138 2647.699L 444.6768684387207 2647.699L 592.9024912516276 2647.699L 741.1281140645345 2647.699L 889.3537368774414 2647.699">
                                        </path>
                                        <path id="SvgjsPath1405"
                                            d="M 0 95.00567000000001C 51.87896798451741 95.00567000000001 96.34665482838949 29.202562500000113 148.2256228129069 29.202562500000113C 200.1045907974243 29.202562500000113 244.57227764129638 146.40218000000004 296.4512456258138 146.40218000000004C 348.3302136103312 146.40218000000004 392.7979004542033 172.87917000000016 444.6768684387207 172.87917000000016C 496.55583642323813 172.87917000000016 541.0235232671101 83.32464500000015 592.9024912516276 83.32464500000015C 644.781459236145 83.32464500000015 689.2491460800171 17.13216999999986 741.1281140645345 17.13216999999986C 793.007082049052 17.13216999999986 837.474768892924 71.64361999999983 889.3537368774414 71.64361999999983"
                                            fill="none" fill-opacity="1" stroke="#fdba8c" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                            class="apexcharts-area" index="1"
                                            clip-path="url(#gridRectMask0udw2vay)"
                                            pathTo="M 0 95.00567000000001C 51.87896798451741 95.00567000000001 96.34665482838949 29.202562500000113 148.2256228129069 29.202562500000113C 200.1045907974243 29.202562500000113 244.57227764129638 146.40218000000004 296.4512456258138 146.40218000000004C 348.3302136103312 146.40218000000004 392.7979004542033 172.87917000000016 444.6768684387207 172.87917000000016C 496.55583642323813 172.87917000000016 541.0235232671101 83.32464500000015 592.9024912516276 83.32464500000015C 644.781459236145 83.32464500000015 689.2491460800171 17.13216999999986 741.1281140645345 17.13216999999986C 793.007082049052 17.13216999999986 837.474768892924 71.64361999999983 889.3537368774414 71.64361999999983"
                                            pathFrom="M -1 2647.699L -1 2647.699L 148.2256228129069 2647.699L 296.4512456258138 2647.699L 444.6768684387207 2647.699L 592.9024912516276 2647.699L 741.1281140645345 2647.699L 889.3537368774414 2647.699">
                                        </path>
                                        <g id="SvgjsG1385" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                            <g id="SvgjsG1387" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1388" r="8" cx="0"
                                                    cy="95.00567000000001"
                                                    class="apexcharts-marker no-pointer-events wh7i6a6ha"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                    index="1" default-marker-size="5"></circle>
                                                <circle id="SvgjsCircle1389" r="5" cx="148.2256228129069"
                                                    cy="29.202562500000113"
                                                    class="apexcharts-marker no-pointer-events w2g8nmfge"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                    index="1" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1390" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1391" r="5" cx="296.4512456258138"
                                                    cy="146.40218000000004"
                                                    class="apexcharts-marker no-pointer-events wv508qyoz"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                    index="1" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1392" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1393" r="5" cx="444.6768684387207"
                                                    cy="172.87917000000016"
                                                    class="apexcharts-marker no-pointer-events w5gitu0dk"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                    index="1" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1394" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1395" r="5" cx="592.9024912516276"
                                                    cy="83.32464500000015"
                                                    class="apexcharts-marker no-pointer-events wgc3ds3iok"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                    index="1" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1396" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1397" r="5" cx="741.1281140645345"
                                                    cy="17.13216999999986"
                                                    class="apexcharts-marker no-pointer-events w3scjmp0j"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                    index="1" default-marker-size="5"></circle>
                                            </g>
                                            <g id="SvgjsG1398" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMask0udw2vay)">
                                                <circle id="SvgjsCircle1399" r="5" cx="889.3537368774414"
                                                    cy="71.64361999999983"
                                                    class="apexcharts-marker no-pointer-events wy9cogrvj"
                                                    stroke="#ffffff" fill="#fdba8c" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                    index="1" default-marker-size="5"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1364" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG1386" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine1459" x1="0" y1="0" x2="889.3537368774414"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1460" x1="0" y1="0" x2="889.3537368774414"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1461" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1462" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1463" class="apexcharts-point-annotations"></g>
                                <rect id="SvgjsRect1464" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect1465" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                            </g>
                            <rect id="SvgjsRect1357" width="0" height="0" x="0" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                fill="#fefefe"></rect>
                            <g id="SvgjsG1430" class="apexcharts-yaxis" rel="0"
                                transform="translate(41.03974914550781, 0)">
                                <g id="SvgjsG1431" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1432"
                                        font-family="Inter, sans-serif" x="20" y="31.4" text-anchor="end"
                                        dominant-baseline="auto" font-size="14px" font-weight="500" fill="#9ca3af"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1433">$6800</tspan>
                                        <title>$6800</title>
                                    </text><text id="SvgjsText1434" font-family="Inter, sans-serif" x="20"
                                        y="109.27350000000001" text-anchor="end" dominant-baseline="auto"
                                        font-size="14px" font-weight="500" fill="#9ca3af"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1435">$6600</tspan>
                                        <title>$6600</title>
                                    </text><text id="SvgjsText1436" font-family="Inter, sans-serif" x="20"
                                        y="187.14700000000002" text-anchor="end" dominant-baseline="auto"
                                        font-size="14px" font-weight="500" fill="#9ca3af"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1437">$6400</tspan>
                                        <title>$6400</title>
                                    </text><text id="SvgjsText1438" font-family="Inter, sans-serif" x="20"
                                        y="265.02049999999997" text-anchor="end" dominant-baseline="auto"
                                        font-size="14px" font-weight="500" fill="#9ca3af"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1439">$6200</tspan>
                                        <title>$6200</title>
                                    </text><text id="SvgjsText1440" font-family="Inter, sans-serif" x="20" y="342.894"
                                        text-anchor="end" dominant-baseline="auto" font-size="14px"
                                        font-weight="500" fill="#9ca3af"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Inter, sans-serif;">
                                        <tspan id="SvgjsTspan1441">$6000</tspan>
                                        <title>$6000</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG1354" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-light apexcharts-active"
                            style="left: 107.04px; top: 99.0057px;">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Inter, sans-serif; font-size: 14px;">01 Feb</div>
                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label">Revenue: </span><span
                                            class="apexcharts-tooltip-text-y-value">$6356</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(253, 186, 140);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label">Revenue (previous period):
                                        </span><span class="apexcharts-tooltip-text-y-value">$6556</span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light apexcharts-active"
                            style="left: 59.0476px; top: 343.494px;">
                            <div class="apexcharts-xaxistooltip-text"
                                style="font-family: Inter, sans-serif; font-size: 12px; min-width: 50px;">01 Feb</div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <!-- Card Footer -->
                <div
                    class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                    <div>
                        <button
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            type="button" data-dropdown-toggle="weekly-sales-dropdown">Last 7 days <svg
                                class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="weekly-sales-dropdown" data-popper-placement="top" data-popper-reference-hidden=""
                            data-popper-escaped=""
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(355px, 65px);">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                    Sep 16, 2021 - Sep 22, 2021
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Yesterday</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Today</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 7 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 30 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 90 days</a>
                                </li>
                            </ul>
                            <div class="py-1" role="none">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Custom...</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Sales Report
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!--Tabs widget -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Statistics this
                    month
                    <button data-popover-target="popover-description" data-popover-placement="bottom-end"
                        type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg><span class="sr-only">Show information</span></button>
                </h3>
                <div data-popover="" id="popover-description" role="tooltip"
                    class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400"
                    data-popper-placement="bottom-end"
                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-313px, 81px);">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Statistics</h3>
                        <p>Statistics is a branch of applied mathematics that involves the collection, description,
                            analysis, and inference of conclusions from quantitative data.</p>
                        <a href="#"
                            class="flex items-center font-medium text-primary-600 dark:text-primary-500 dark:hover:text-primary-600 hover:text-primary-700">Read
                            more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                    </div>
                    <div data-popper-arrow=""
                        style="position: absolute; left: 0px; transform: translate(271px, 0px);"></div>
                </div>
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select tab</label>
                    <select id="tabs"
                        class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option>Statistics</option>
                        <option>Services</option>
                        <option>FAQ</option>
                    </select>
                </div>
                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400"
                    id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                            aria-controls="faq" aria-selected="true"
                            class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500">Top
                            products</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                            aria-controls="about" aria-selected="false"
                            class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300">Top
                            Customers</button>
                    </li>
                </ul>
                <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                    <div class="pt-4" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/iphone.png"
                                            alt="imac image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                iPhone 14 Pro
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                    </path>
                                                </svg>
                                                2.5%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $445,467
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/imac.png"
                                            alt="imac image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple iMac 27"
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                    </path>
                                                </svg>
                                                12.5%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $256,982
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/watch.png"
                                            alt="watch image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple Watch SE
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-red-600 dark:text-red-500">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                                    </path>
                                                </svg>
                                                1.35%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $201,869
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/ipad.png"
                                            alt="ipad image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple iPad Air
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-green-500 dark:text-green-400">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                                    </path>
                                                </svg>
                                                12.5%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $103,967
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center min-w-0">
                                        <img class="flex-shrink-0 w-10 h-10"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/products/imac.png"
                                            alt="imac image">
                                        <div class="ml-3">
                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                Apple iMac 24"
                                            </p>
                                            <div
                                                class="flex items-center justify-end flex-1 text-sm text-red-600 dark:text-red-500">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                                        d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                                    </path>
                                                </svg>
                                                2%
                                                <span class="ml-2 text-gray-500">vs last month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $98,543
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden pt-4" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/neil-sims.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $3320
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Bonnie Green
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $2467
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/michael-gough.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Michael Gough
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $2235
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/thomas-lean.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Thomes Lean
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $1842
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full"
                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/lana-byrd.png"
                                            alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                            Lana Byrd
                                        </p>
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                            email@flowbite.com
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        $1044
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Card Footer -->
                <div
                    class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                    <div>
                        <button
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                            type="button" data-dropdown-toggle="stats-dropdown">Last 7 days <svg
                                class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="stats-dropdown" data-popper-placement="top" data-popper-reference-hidden=""
                            data-popper-escaped=""
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1438px, 59px);">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                    role="none">
                                    Sep 16, 2021 - Sep 22, 2021
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Yesterday</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Today</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 7 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 30 days</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Last 90 days</a>
                                </li>
                            </ul>
                            <div class="py-1" role="none">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Custom...</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Full Report
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Row 2 --}}
        <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
            <div
                class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">New products</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                    <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                            12.5%
                        </span>
                        Since last month
                    </p>
                </div>
                <div class="w-full" id="new-products-chart" style="min-height: 155px;">
                    <div id="apexcharts1wbl79qn" class="apexcharts-canvas apexcharts1wbl79qn apexcharts-theme-light"
                        style="width: 238px; height: 140px;"><svg id="SvgjsSvg1466" width="238"
                            height="140" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                            style="background: transparent;">
                            <g id="SvgjsG1468" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(12, 30)">
                                <defs id="SvgjsDefs1467">
                                    <linearGradient id="SvgjsLinearGradient1472" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop1473" stop-opacity="0.4"
                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                        <stop id="SvgjsStop1474" stop-opacity="0.5"
                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        <stop id="SvgjsStop1475" stop-opacity="0.5"
                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMask1wbl79qn">
                                        <rect id="SvgjsRect1477" width="225" height="83" x="-4.5" y="-2.5"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask1wbl79qn"></clipPath>
                                    <clipPath id="nonForecastMask1wbl79qn"></clipPath>
                                    <clipPath id="gridRectMarkerMask1wbl79qn">
                                        <rect id="SvgjsRect1478" width="220" height="82" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect1476" width="27.771428571428572" height="78" x="0" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient1472)"
                                    class="apexcharts-xcrosshairs" y2="78" filter="none"
                                    fill-opacity="0.9"></rect>
                                <g id="SvgjsG1497" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1498" class="apexcharts-xaxis-texts-g"
                                        transform="translate(0, 4)"></g>
                                </g>
                                <g id="SvgjsG1507" class="apexcharts-grid">
                                    <g id="SvgjsG1508" class="apexcharts-gridlines-horizontal"
                                        style="display: none;">
                                        <line id="SvgjsLine1510" x1="0" y1="0" x2="216"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1511" x1="0" y1="19.5" x2="216"
                                            y2="19.5" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1512" x1="0" y1="39" x2="216"
                                            y2="39" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1513" x1="0" y1="58.5" x2="216"
                                            y2="58.5" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1514" x1="0" y1="78" x2="216"
                                            y2="78" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1509" class="apexcharts-gridlines-vertical"
                                        style="display: none;"></g>
                                    <line id="SvgjsLine1516" x1="0" y1="78" x2="216"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1515" x1="0" y1="1" x2="0"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1479" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG1480" class="apexcharts-series" rel="1"
                                        seriesName="Quantity" data:realIndex="0">
                                        <path id="SvgjsPath1484"
                                            d="M 1.5428571428571427 78L 1.5428571428571427 14.700000000000003Q 1.5428571428571427 11.700000000000003 4.542857142857143 11.700000000000003L 21.314285714285717 11.700000000000003Q 24.314285714285717 11.700000000000003 24.314285714285717 14.700000000000003L 24.314285714285717 14.700000000000003L 24.314285714285717 78L 24.314285714285717 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask1wbl79qn)"
                                            pathTo="M 1.5428571428571427 78L 1.5428571428571427 14.700000000000003Q 1.5428571428571427 11.700000000000003 4.542857142857143 11.700000000000003L 21.314285714285717 11.700000000000003Q 24.314285714285717 11.700000000000003 24.314285714285717 14.700000000000003L 24.314285714285717 14.700000000000003L 24.314285714285717 78L 24.314285714285717 78z"
                                            pathFrom="M 1.5428571428571427 78L 1.5428571428571427 78L 24.314285714285717 78L 24.314285714285717 78L 24.314285714285717 78L 24.314285714285717 78L 24.314285714285717 78L 1.5428571428571427 78"
                                            cy="11.700000000000003" cx="29.9" j="0" val="170"
                                            barHeight="66.3" barWidth="27.771428571428572"></path>
                                        <path id="SvgjsPath1486"
                                            d="M 32.4 78L 32.4 10.800000000000011Q 32.4 7.800000000000011 35.4 7.800000000000011L 52.17142857142857 7.800000000000011Q 55.17142857142857 7.800000000000011 55.17142857142857 10.800000000000011L 55.17142857142857 10.800000000000011L 55.17142857142857 78L 55.17142857142857 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask1wbl79qn)"
                                            pathTo="M 32.4 78L 32.4 10.800000000000011Q 32.4 7.800000000000011 35.4 7.800000000000011L 52.17142857142857 7.800000000000011Q 55.17142857142857 7.800000000000011 55.17142857142857 10.800000000000011L 55.17142857142857 10.800000000000011L 55.17142857142857 78L 55.17142857142857 78z"
                                            pathFrom="M 32.4 78L 32.4 78L 55.17142857142857 78L 55.17142857142857 78L 55.17142857142857 78L 55.17142857142857 78L 55.17142857142857 78L 32.4 78"
                                            cy="7.800000000000011" cx="60.75714285714285" j="1" val="180"
                                            barHeight="70.19999999999999" barWidth="27.771428571428572"></path>
                                        <path id="SvgjsPath1488"
                                            d="M 63.25714285714285 78L 63.25714285714285 17.040000000000006Q 63.25714285714285 14.040000000000006 66.25714285714285 14.040000000000006L 83.02857142857142 14.040000000000006Q 86.02857142857142 14.040000000000006 86.02857142857142 17.040000000000006L 86.02857142857142 17.040000000000006L 86.02857142857142 78L 86.02857142857142 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask1wbl79qn)"
                                            pathTo="M 63.25714285714285 78L 63.25714285714285 17.040000000000006Q 63.25714285714285 14.040000000000006 66.25714285714285 14.040000000000006L 83.02857142857142 14.040000000000006Q 86.02857142857142 14.040000000000006 86.02857142857142 17.040000000000006L 86.02857142857142 17.040000000000006L 86.02857142857142 78L 86.02857142857142 78z"
                                            pathFrom="M 63.25714285714285 78L 63.25714285714285 78L 86.02857142857142 78L 86.02857142857142 78L 86.02857142857142 78L 86.02857142857142 78L 86.02857142857142 78L 63.25714285714285 78"
                                            cy="14.040000000000006" cx="91.61428571428571" j="2" val="164"
                                            barHeight="63.959999999999994" barWidth="27.771428571428572"></path>
                                        <path id="SvgjsPath1490"
                                            d="M 94.11428571428571 78L 94.11428571428571 24.450000000000003Q 94.11428571428571 21.450000000000003 97.11428571428571 21.450000000000003L 113.88571428571429 21.450000000000003Q 116.88571428571429 21.450000000000003 116.88571428571429 24.450000000000003L 116.88571428571429 24.450000000000003L 116.88571428571429 78L 116.88571428571429 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask1wbl79qn)"
                                            pathTo="M 94.11428571428571 78L 94.11428571428571 24.450000000000003Q 94.11428571428571 21.450000000000003 97.11428571428571 21.450000000000003L 113.88571428571429 21.450000000000003Q 116.88571428571429 21.450000000000003 116.88571428571429 24.450000000000003L 116.88571428571429 24.450000000000003L 116.88571428571429 78L 116.88571428571429 78z"
                                            pathFrom="M 94.11428571428571 78L 94.11428571428571 78L 116.88571428571429 78L 116.88571428571429 78L 116.88571428571429 78L 116.88571428571429 78L 116.88571428571429 78L 94.11428571428571 78"
                                            cy="21.450000000000003" cx="122.47142857142858" j="3" val="145"
                                            barHeight="56.55" barWidth="27.771428571428572"></path>
                                        <path id="SvgjsPath1492"
                                            d="M 124.97142857142858 78L 124.97142857142858 5.340000000000003Q 124.97142857142858 2.3400000000000034 127.97142857142858 2.3400000000000034L 144.74285714285713 2.3400000000000034Q 147.74285714285713 2.3400000000000034 147.74285714285713 5.340000000000003L 147.74285714285713 5.340000000000003L 147.74285714285713 78L 147.74285714285713 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask1wbl79qn)"
                                            pathTo="M 124.97142857142858 78L 124.97142857142858 5.340000000000003Q 124.97142857142858 2.3400000000000034 127.97142857142858 2.3400000000000034L 144.74285714285713 2.3400000000000034Q 147.74285714285713 2.3400000000000034 147.74285714285713 5.340000000000003L 147.74285714285713 5.340000000000003L 147.74285714285713 78L 147.74285714285713 78z"
                                            pathFrom="M 124.97142857142858 78L 124.97142857142858 78L 147.74285714285713 78L 147.74285714285713 78L 147.74285714285713 78L 147.74285714285713 78L 147.74285714285713 78L 124.97142857142858 78"
                                            cy="2.3400000000000034" cx="153.32857142857142" j="4" val="194"
                                            barHeight="75.66" barWidth="27.771428571428572"></path>
                                        <path id="SvgjsPath1494"
                                            d="M 155.82857142857142 78L 155.82857142857142 14.700000000000003Q 155.82857142857142 11.700000000000003 158.82857142857142 11.700000000000003L 175.6 11.700000000000003Q 178.6 11.700000000000003 178.6 14.700000000000003L 178.6 14.700000000000003L 178.6 78L 178.6 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask1wbl79qn)"
                                            pathTo="M 155.82857142857142 78L 155.82857142857142 14.700000000000003Q 155.82857142857142 11.700000000000003 158.82857142857142 11.700000000000003L 175.6 11.700000000000003Q 178.6 11.700000000000003 178.6 14.700000000000003L 178.6 14.700000000000003L 178.6 78L 178.6 78z"
                                            pathFrom="M 155.82857142857142 78L 155.82857142857142 78L 178.6 78L 178.6 78L 178.6 78L 178.6 78L 178.6 78L 155.82857142857142 78"
                                            cy="11.700000000000003" cx="184.18571428571428" j="5" val="170"
                                            barHeight="66.3" barWidth="27.771428571428572"></path>
                                        <path id="SvgjsPath1496"
                                            d="M 186.68571428571428 78L 186.68571428571428 20.550000000000004Q 186.68571428571428 17.550000000000004 189.68571428571428 17.550000000000004L 206.45714285714286 17.550000000000004Q 209.45714285714286 17.550000000000004 209.45714285714286 20.550000000000004L 209.45714285714286 20.550000000000004L 209.45714285714286 78L 209.45714285714286 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask1wbl79qn)"
                                            pathTo="M 186.68571428571428 78L 186.68571428571428 20.550000000000004Q 186.68571428571428 17.550000000000004 189.68571428571428 17.550000000000004L 206.45714285714286 17.550000000000004Q 209.45714285714286 17.550000000000004 209.45714285714286 20.550000000000004L 209.45714285714286 20.550000000000004L 209.45714285714286 78L 209.45714285714286 78z"
                                            pathFrom="M 186.68571428571428 78L 186.68571428571428 78L 209.45714285714286 78L 209.45714285714286 78L 209.45714285714286 78L 209.45714285714286 78L 209.45714285714286 78L 186.68571428571428 78"
                                            cy="17.550000000000004" cx="215.04285714285714" j="6" val="155"
                                            barHeight="60.449999999999996" barWidth="27.771428571428572"></path>
                                        <g id="SvgjsG1482" class="apexcharts-bar-goals-markers"
                                            style="pointer-events: none">
                                            <g id="SvgjsG1483" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1485" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1487" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1489" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1491" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1493" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1495" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1481" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1517" x1="0" y1="0" x2="216"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1518" x1="0" y1="0" x2="216"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1519" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1520" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1521" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1506" class="apexcharts-yaxis" rel="0"
                                transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1469" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 70px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Inter, sans-serif; font-size: 14px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="w-full">
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Users</h3>
                    <span
                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                    <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                        <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                </path>
                            </svg>
                            3,4%
                        </span>
                        Since last month
                    </p>
                </div>
                <div class="w-full" id="week-signups-chart" style="min-height: 155px;">
                    <div id="apexcharts2rsnxw5z" class="apexcharts-canvas apexcharts2rsnxw5z apexcharts-theme-light"
                        style="width: 238px; height: 140px;"><svg id="SvgjsSvg1612" width="238"
                            height="140" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                            style="background: transparent;">
                            <g id="SvgjsG1614" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(12, 30)">
                                <defs id="SvgjsDefs1613">
                                    <linearGradient id="SvgjsLinearGradient1618" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop1619" stop-opacity="0.4"
                                            stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                        <stop id="SvgjsStop1620" stop-opacity="0.5"
                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        <stop id="SvgjsStop1621" stop-opacity="0.5"
                                            stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMask2rsnxw5z">
                                        <rect id="SvgjsRect1623" width="220" height="78" x="-2" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask2rsnxw5z"></clipPath>
                                    <clipPath id="nonForecastMask2rsnxw5z"></clipPath>
                                    <clipPath id="gridRectMarkerMask2rsnxw5z">
                                        <rect id="SvgjsRect1624" width="220" height="82" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect1622" width="7.714285714285714" height="78" x="0" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                    stroke-dasharray="3" fill="url(#SvgjsLinearGradient1618)"
                                    class="apexcharts-xcrosshairs" y2="78" filter="none"
                                    fill-opacity="0.9"></rect>
                                <g id="SvgjsG1650" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1651" class="apexcharts-xaxis-texts-g"
                                        transform="translate(0, 4)"></g>
                                </g>
                                <g id="SvgjsG1660" class="apexcharts-grid">
                                    <g id="SvgjsG1661" class="apexcharts-gridlines-horizontal"
                                        style="display: none;">
                                        <line id="SvgjsLine1663" x1="0" y1="0" x2="216"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1664" x1="0" y1="15.6" x2="216"
                                            y2="15.6" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1665" x1="0" y1="31.2" x2="216"
                                            y2="31.2" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1666" x1="0" y1="46.8" x2="216"
                                            y2="46.8" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1667" x1="0" y1="62.4" x2="216"
                                            y2="62.4" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1668" x1="0" y1="78" x2="216"
                                            y2="78" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1662" class="apexcharts-gridlines-vertical"
                                        style="display: none;"></g>
                                    <line id="SvgjsLine1670" x1="0" y1="78" x2="216"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1669" x1="0" y1="1" x2="0"
                                        y2="78" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1625" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG1626" class="apexcharts-series" rel="1"
                                        seriesName="Users" data:realIndex="0">
                                        <rect id="SvgjsRect1629" width="7.714285714285714" height="78"
                                            x="11.571428571428571" y="0" rx="3" ry="3"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#374151" class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath1631"
                                            d="M 11.571428571428571 78L 11.571428571428571 46.315999999999995Q 11.571428571428571 43.315999999999995 14.571428571428571 43.315999999999995L 16.285714285714285 43.315999999999995Q 19.285714285714285 43.315999999999995 19.285714285714285 46.315999999999995L 19.285714285714285 46.315999999999995L 19.285714285714285 78L 19.285714285714285 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask2rsnxw5z)"
                                            pathTo="M 11.571428571428571 78L 11.571428571428571 46.315999999999995Q 11.571428571428571 43.315999999999995 14.571428571428571 43.315999999999995L 16.285714285714285 43.315999999999995Q 19.285714285714285 43.315999999999995 19.285714285714285 46.315999999999995L 19.285714285714285 46.315999999999995L 19.285714285714285 78L 19.285714285714285 78z"
                                            pathFrom="M 11.571428571428571 78L 11.571428571428571 78L 19.285714285714285 78L 19.285714285714285 78L 19.285714285714285 78L 19.285714285714285 78L 19.285714285714285 78L 11.571428571428571 78"
                                            cy="43.315999999999995" cx="42.42857142857143" j="0" val="1334"
                                            barHeight="34.684000000000005" barWidth="7.714285714285714"></path>
                                        <rect id="SvgjsRect1632" width="7.714285714285714" height="78"
                                            x="42.42857142857143" y="0" rx="3" ry="3"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#374151" class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath1634"
                                            d="M 42.42857142857143 78L 42.42857142857143 17.689999999999998Q 42.42857142857143 14.689999999999998 45.42857142857143 14.689999999999998L 47.142857142857146 14.689999999999998Q 50.142857142857146 14.689999999999998 50.142857142857146 17.689999999999998L 50.142857142857146 17.689999999999998L 50.142857142857146 78L 50.142857142857146 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask2rsnxw5z)"
                                            pathTo="M 42.42857142857143 78L 42.42857142857143 17.689999999999998Q 42.42857142857143 14.689999999999998 45.42857142857143 14.689999999999998L 47.142857142857146 14.689999999999998Q 50.142857142857146 14.689999999999998 50.142857142857146 17.689999999999998L 50.142857142857146 17.689999999999998L 50.142857142857146 78L 50.142857142857146 78z"
                                            pathFrom="M 42.42857142857143 78L 42.42857142857143 78L 50.142857142857146 78L 50.142857142857146 78L 50.142857142857146 78L 50.142857142857146 78L 50.142857142857146 78L 42.42857142857143 78"
                                            cy="14.689999999999998" cx="73.28571428571429" j="1" val="2435"
                                            barHeight="63.31" barWidth="7.714285714285714"></path>
                                        <rect id="SvgjsRect1635" width="7.714285714285714" height="78"
                                            x="73.28571428571429" y="0" rx="3" ry="3"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#374151" class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath1637"
                                            d="M 73.28571428571429 78L 73.28571428571429 35.422Q 73.28571428571429 32.422 76.28571428571429 32.422L 78 32.422Q 81 32.422 81 35.422L 81 35.422L 81 78L 81 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask2rsnxw5z)"
                                            pathTo="M 73.28571428571429 78L 73.28571428571429 35.422Q 73.28571428571429 32.422 76.28571428571429 32.422L 78 32.422Q 81 32.422 81 35.422L 81 35.422L 81 78L 81 78z"
                                            pathFrom="M 73.28571428571429 78L 73.28571428571429 78L 81 78L 81 78L 81 78L 81 78L 81 78L 73.28571428571429 78"
                                            cy="32.422" cx="104.14285714285715" j="2" val="1753"
                                            barHeight="45.578" barWidth="7.714285714285714"></path>
                                        <rect id="SvgjsRect1638" width="7.714285714285714" height="78"
                                            x="104.14285714285715" y="0" rx="3" ry="3"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#374151" class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath1640"
                                            d="M 104.14285714285715 78L 104.14285714285715 46.472Q 104.14285714285715 43.472 107.14285714285715 43.472L 108.85714285714286 43.472Q 111.85714285714286 43.472 111.85714285714286 46.472L 111.85714285714286 46.472L 111.85714285714286 78L 111.85714285714286 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask2rsnxw5z)"
                                            pathTo="M 104.14285714285715 78L 104.14285714285715 46.472Q 104.14285714285715 43.472 107.14285714285715 43.472L 108.85714285714286 43.472Q 111.85714285714286 43.472 111.85714285714286 46.472L 111.85714285714286 46.472L 111.85714285714286 78L 111.85714285714286 78z"
                                            pathFrom="M 104.14285714285715 78L 104.14285714285715 78L 111.85714285714286 78L 111.85714285714286 78L 111.85714285714286 78L 111.85714285714286 78L 111.85714285714286 78L 104.14285714285715 78"
                                            cy="43.472" cx="135" j="3" val="1328"
                                            barHeight="34.528" barWidth="7.714285714285714"></path>
                                        <rect id="SvgjsRect1641" width="7.714285714285714" height="78" x="135"
                                            y="0" rx="3" ry="3" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#374151"
                                            class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath1643"
                                            d="M 135 78L 135 50.97Q 135 47.97 138 47.97L 139.71428571428572 47.97Q 142.71428571428572 47.97 142.71428571428572 50.97L 142.71428571428572 50.97L 142.71428571428572 78L 142.71428571428572 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask2rsnxw5z)"
                                            pathTo="M 135 78L 135 50.97Q 135 47.97 138 47.97L 139.71428571428572 47.97Q 142.71428571428572 47.97 142.71428571428572 50.97L 142.71428571428572 50.97L 142.71428571428572 78L 142.71428571428572 78z"
                                            pathFrom="M 135 78L 135 78L 142.71428571428572 78L 142.71428571428572 78L 142.71428571428572 78L 142.71428571428572 78L 142.71428571428572 78L 135 78"
                                            cy="47.97" cx="165.85714285714286" j="4" val="1155"
                                            barHeight="30.03" barWidth="7.714285714285714"></path>
                                        <rect id="SvgjsRect1644" width="7.714285714285714" height="78"
                                            x="165.85714285714286" y="0" rx="3" ry="3"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#374151" class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath1646"
                                            d="M 165.85714285714286 78L 165.85714285714286 38.568Q 165.85714285714286 35.568 168.85714285714286 35.568L 170.57142857142858 35.568Q 173.57142857142858 35.568 173.57142857142858 38.568L 173.57142857142858 38.568L 173.57142857142858 78L 173.57142857142858 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask2rsnxw5z)"
                                            pathTo="M 165.85714285714286 78L 165.85714285714286 38.568Q 165.85714285714286 35.568 168.85714285714286 35.568L 170.57142857142858 35.568Q 173.57142857142858 35.568 173.57142857142858 38.568L 173.57142857142858 38.568L 173.57142857142858 78L 173.57142857142858 78z"
                                            pathFrom="M 165.85714285714286 78L 165.85714285714286 78L 173.57142857142858 78L 173.57142857142858 78L 173.57142857142858 78L 173.57142857142858 78L 173.57142857142858 78L 165.85714285714286 78"
                                            cy="35.568" cx="196.71428571428572" j="5" val="1632"
                                            barHeight="42.432" barWidth="7.714285714285714"></path>
                                        <rect id="SvgjsRect1647" width="7.714285714285714" height="78"
                                            x="196.71428571428572" y="0" rx="3" ry="3"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#374151" class="apexcharts-backgroundBar"></rect>
                                        <path id="SvgjsPath1649"
                                            d="M 196.71428571428572 78L 196.71428571428572 46.263999999999996Q 196.71428571428572 43.263999999999996 199.71428571428572 43.263999999999996L 201.42857142857144 43.263999999999996Q 204.42857142857144 43.263999999999996 204.42857142857144 46.263999999999996L 204.42857142857144 46.263999999999996L 204.42857142857144 78L 204.42857142857144 78z"
                                            fill="rgba(26,86,219,1)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMask2rsnxw5z)"
                                            pathTo="M 196.71428571428572 78L 196.71428571428572 46.263999999999996Q 196.71428571428572 43.263999999999996 199.71428571428572 43.263999999999996L 201.42857142857144 43.263999999999996Q 204.42857142857144 43.263999999999996 204.42857142857144 46.263999999999996L 204.42857142857144 46.263999999999996L 204.42857142857144 78L 204.42857142857144 78z"
                                            pathFrom="M 196.71428571428572 78L 196.71428571428572 78L 204.42857142857144 78L 204.42857142857144 78L 204.42857142857144 78L 204.42857142857144 78L 204.42857142857144 78L 196.71428571428572 78"
                                            cy="43.263999999999996" cx="227.57142857142858" j="6" val="1336"
                                            barHeight="34.736000000000004" barWidth="7.714285714285714"></path>
                                        <g id="SvgjsG1628" class="apexcharts-bar-goals-markers"
                                            style="pointer-events: none">
                                            <g id="SvgjsG1630" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1633" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1636" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1639" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1642" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1645" className="apexcharts-bar-goals-groups"></g>
                                            <g id="SvgjsG1648" className="apexcharts-bar-goals-groups"></g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1627" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1671" x1="0" y1="0" x2="216"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1672" x1="0" y1="0" x2="216"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1673" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1674" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1675" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1659" class="apexcharts-yaxis" rel="0"
                                transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1615" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 70px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Inter, sans-serif; font-size: 14px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(26, 86, 219);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Inter, sans-serif; font-size: 14px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="w-full">
                    <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Audience by age</h3>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">50+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 18%">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">40+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 15%">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">30+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 60%">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="w-16 text-sm font-medium dark:text-white">20+</div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 30%">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="traffic-channels-chart" class="w-full"></div>
            </div>
        </div>

        {{-- Row 3 --}}
        <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Latest Activity</h3>
                    <a href="#"
                        class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                        View all
                    </a>
                </div>
                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April
                            2023</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI design in Figma
                        </h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+
                            pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce
                            &amp; Marketing pages.</p>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-primary-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                            more <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March
                            2023</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI code in Flowbite
                        </h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens
                            of web components and interactive elements built on top of Tailwind CSS.</p>
                        <a href="https://flowbite.com/blocks/"
                            class="inline-flex items-center text-xs font-medium hover:underline text-primary-700 sm:text-sm dark:text-primary-500">
                            Go to Flowbite Blocks
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                            2023</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma
                        </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of
                            web components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>
            </div>
            
            <div class="grid gap-4">
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="items-center justify-between pb-4 border-b border-gray-200 sm:flex dark:border-gray-700">
                        <div class="w-full mb-4 sm:mb-0">
                            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Sales by category</h3>
                            <span
                                class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop
                                PC</span>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                    2.5%
                                </span>
                                Since last month
                            </p>
                        </div>
                        <div class="w-full max-w-lg">
                            <div date-rangepicker="" class="grid items-center grid-cols-2 gap-4">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path
                                                d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                            </path>
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                        placeholder="From">
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path
                                                d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                            </path>
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input name="end" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                        placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full" id="sales-by-category" style="min-height: 435px;">
                        <div id="apexchartshrbuydw1"
                            class="apexcharts-canvas apexchartshrbuydw1 apexcharts-theme-light"
                            style="width: 747px; height: 420px;"><svg id="SvgjsSvg1522" width="747"
                                height="420" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1524" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(12, 30)">
                                    <defs id="SvgjsDefs1523">
                                        <linearGradient id="SvgjsLinearGradient1527" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1528" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1529" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1530" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskhrbuydw1">
                                            <rect id="SvgjsRect1532" width="734" height="380" x="-4.5"
                                                y="-2.5" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskhrbuydw1"></clipPath>
                                        <clipPath id="nonForecastMaskhrbuydw1"></clipPath>
                                        <clipPath id="gridRectMarkerMaskhrbuydw1">
                                            <rect id="SvgjsRect1533" width="729" height="379" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1531" width="103.57142857142857" height="375" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient1527)"
                                        class="apexcharts-xcrosshairs" y2="375" filter="none"
                                        fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1586" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1587" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG1596" class="apexcharts-grid">
                                        <g id="SvgjsG1597" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1599" x1="0" y1="0"
                                                x2="725" y2="0" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1600" x1="0" y1="75"
                                                x2="725" y2="75" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1601" x1="0" y1="150"
                                                x2="725" y2="150" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1602" x1="0" y1="225"
                                                x2="725" y2="225" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1603" x1="0" y1="300"
                                                x2="725" y2="300" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1604" x1="0" y1="375"
                                                x2="725" y2="375" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1598" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine1606" x1="0" y1="375" x2="725"
                                            y2="375" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1605" x1="0" y1="1" x2="0"
                                            y2="375" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1534" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1535" class="apexcharts-series" rel="1"
                                            seriesName="DesktopxPC" data:realIndex="0">
                                            <path id="SvgjsPath1539"
                                                d="M 5.1785714285714235 375L 5.1785714285714235 195.85714285714286Q 5.1785714285714235 192.85714285714286 8.178571428571423 192.85714285714286L 28.25 192.85714285714286Q 31.25 192.85714285714286 31.25 195.85714285714286L 31.25 195.85714285714286L 31.25 375L 31.25 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 5.1785714285714235 375L 5.1785714285714235 195.85714285714286Q 5.1785714285714235 192.85714285714286 8.178571428571423 192.85714285714286L 28.25 192.85714285714286Q 31.25 192.85714285714286 31.25 195.85714285714286L 31.25 195.85714285714286L 31.25 375L 31.25 375z"
                                                pathFrom="M 5.1785714285714235 375L 5.1785714285714235 375L 31.25 375L 31.25 375L 31.25 375L 31.25 375L 31.25 375L 5.1785714285714235 375"
                                                cy="192.85714285714286" cx="106.25" j="0" val="170"
                                                barHeight="182.14285714285714" barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1541"
                                                d="M 108.75 375L 108.75 185.14285714285714Q 108.75 182.14285714285714 111.75 182.14285714285714L 131.82142857142858 182.14285714285714Q 134.82142857142858 182.14285714285714 134.82142857142858 185.14285714285714L 134.82142857142858 185.14285714285714L 134.82142857142858 375L 134.82142857142858 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 108.75 375L 108.75 185.14285714285714Q 108.75 182.14285714285714 111.75 182.14285714285714L 131.82142857142858 182.14285714285714Q 134.82142857142858 182.14285714285714 134.82142857142858 185.14285714285714L 134.82142857142858 185.14285714285714L 134.82142857142858 375L 134.82142857142858 375z"
                                                pathFrom="M 108.75 375L 108.75 375L 134.82142857142858 375L 134.82142857142858 375L 134.82142857142858 375L 134.82142857142858 375L 134.82142857142858 375L 108.75 375"
                                                cy="182.14285714285714" cx="209.82142857142856" j="1"
                                                val="180" barHeight="192.85714285714286"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1543"
                                                d="M 212.32142857142856 375L 212.32142857142856 202.28571428571428Q 212.32142857142856 199.28571428571428 215.32142857142856 199.28571428571428L 235.39285714285714 199.28571428571428Q 238.39285714285714 199.28571428571428 238.39285714285714 202.28571428571428L 238.39285714285714 202.28571428571428L 238.39285714285714 375L 238.39285714285714 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 212.32142857142856 375L 212.32142857142856 202.28571428571428Q 212.32142857142856 199.28571428571428 215.32142857142856 199.28571428571428L 235.39285714285714 199.28571428571428Q 238.39285714285714 199.28571428571428 238.39285714285714 202.28571428571428L 238.39285714285714 202.28571428571428L 238.39285714285714 375L 238.39285714285714 375z"
                                                pathFrom="M 212.32142857142856 375L 212.32142857142856 375L 238.39285714285714 375L 238.39285714285714 375L 238.39285714285714 375L 238.39285714285714 375L 238.39285714285714 375L 212.32142857142856 375"
                                                cy="199.28571428571428" cx="313.3928571428571" j="2"
                                                val="164" barHeight="175.71428571428572"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1545"
                                                d="M 315.8928571428571 375L 315.8928571428571 222.64285714285714Q 315.8928571428571 219.64285714285714 318.8928571428571 219.64285714285714L 338.96428571428567 219.64285714285714Q 341.96428571428567 219.64285714285714 341.96428571428567 222.64285714285714L 341.96428571428567 222.64285714285714L 341.96428571428567 375L 341.96428571428567 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 315.8928571428571 375L 315.8928571428571 222.64285714285714Q 315.8928571428571 219.64285714285714 318.8928571428571 219.64285714285714L 338.96428571428567 219.64285714285714Q 341.96428571428567 219.64285714285714 341.96428571428567 222.64285714285714L 341.96428571428567 222.64285714285714L 341.96428571428567 375L 341.96428571428567 375z"
                                                pathFrom="M 315.8928571428571 375L 315.8928571428571 375L 341.96428571428567 375L 341.96428571428567 375L 341.96428571428567 375L 341.96428571428567 375L 341.96428571428567 375L 315.8928571428571 375"
                                                cy="219.64285714285714" cx="416.96428571428567" j="3"
                                                val="145" barHeight="155.35714285714286"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1547"
                                                d="M 419.46428571428567 375L 419.46428571428567 170.14285714285714Q 419.46428571428567 167.14285714285714 422.46428571428567 167.14285714285714L 442.5357142857142 167.14285714285714Q 445.5357142857142 167.14285714285714 445.5357142857142 170.14285714285714L 445.5357142857142 170.14285714285714L 445.5357142857142 375L 445.5357142857142 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 419.46428571428567 375L 419.46428571428567 170.14285714285714Q 419.46428571428567 167.14285714285714 422.46428571428567 167.14285714285714L 442.5357142857142 167.14285714285714Q 445.5357142857142 167.14285714285714 445.5357142857142 170.14285714285714L 445.5357142857142 170.14285714285714L 445.5357142857142 375L 445.5357142857142 375z"
                                                pathFrom="M 419.46428571428567 375L 419.46428571428567 375L 445.5357142857142 375L 445.5357142857142 375L 445.5357142857142 375L 445.5357142857142 375L 445.5357142857142 375L 419.46428571428567 375"
                                                cy="167.14285714285714" cx="520.5357142857142" j="4"
                                                val="194" barHeight="207.85714285714286"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1549"
                                                d="M 523.0357142857142 375L 523.0357142857142 195.85714285714286Q 523.0357142857142 192.85714285714286 526.0357142857142 192.85714285714286L 546.1071428571428 192.85714285714286Q 549.1071428571428 192.85714285714286 549.1071428571428 195.85714285714286L 549.1071428571428 195.85714285714286L 549.1071428571428 375L 549.1071428571428 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 523.0357142857142 375L 523.0357142857142 195.85714285714286Q 523.0357142857142 192.85714285714286 526.0357142857142 192.85714285714286L 546.1071428571428 192.85714285714286Q 549.1071428571428 192.85714285714286 549.1071428571428 195.85714285714286L 549.1071428571428 195.85714285714286L 549.1071428571428 375L 549.1071428571428 375z"
                                                pathFrom="M 523.0357142857142 375L 523.0357142857142 375L 549.1071428571428 375L 549.1071428571428 375L 549.1071428571428 375L 549.1071428571428 375L 549.1071428571428 375L 523.0357142857142 375"
                                                cy="192.85714285714286" cx="624.1071428571428" j="5"
                                                val="170" barHeight="182.14285714285714"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1551"
                                                d="M 626.6071428571428 375L 626.6071428571428 211.92857142857144Q 626.6071428571428 208.92857142857144 629.6071428571428 208.92857142857144L 649.6785714285713 208.92857142857144Q 652.6785714285713 208.92857142857144 652.6785714285713 211.92857142857144L 652.6785714285713 211.92857142857144L 652.6785714285713 375L 652.6785714285713 375z"
                                                fill="rgba(26,86,219,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 626.6071428571428 375L 626.6071428571428 211.92857142857144Q 626.6071428571428 208.92857142857144 629.6071428571428 208.92857142857144L 649.6785714285713 208.92857142857144Q 652.6785714285713 208.92857142857144 652.6785714285713 211.92857142857144L 652.6785714285713 211.92857142857144L 652.6785714285713 375L 652.6785714285713 375z"
                                                pathFrom="M 626.6071428571428 375L 626.6071428571428 375L 652.6785714285713 375L 652.6785714285713 375L 652.6785714285713 375L 652.6785714285713 375L 652.6785714285713 375L 626.6071428571428 375"
                                                cy="208.92857142857144" cx="727.6785714285713" j="6"
                                                val="155" barHeight="166.07142857142856"
                                                barWidth="31.071428571428573"></path>
                                            <g id="SvgjsG1537" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG1538" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1540" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1542" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1544" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1546" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1548" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1550" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1552" class="apexcharts-series" rel="2"
                                            seriesName="Phones" data:realIndex="1">
                                            <path id="SvgjsPath1556"
                                                d="M 36.25 375L 36.25 249.42857142857144Q 36.25 246.42857142857144 39.25 246.42857142857144L 59.32142857142857 246.42857142857144Q 62.32142857142857 246.42857142857144 62.32142857142857 249.42857142857144L 62.32142857142857 249.42857142857144L 62.32142857142857 375L 62.32142857142857 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 36.25 375L 36.25 249.42857142857144Q 36.25 246.42857142857144 39.25 246.42857142857144L 59.32142857142857 246.42857142857144Q 62.32142857142857 246.42857142857144 62.32142857142857 249.42857142857144L 62.32142857142857 249.42857142857144L 62.32142857142857 375L 62.32142857142857 375z"
                                                pathFrom="M 36.25 375L 36.25 375L 62.32142857142857 375L 62.32142857142857 375L 62.32142857142857 375L 62.32142857142857 375L 62.32142857142857 375L 36.25 375"
                                                cy="246.42857142857144" cx="137.32142857142858" j="0"
                                                val="120" barHeight="128.57142857142856"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1558"
                                                d="M 139.82142857142858 375L 139.82142857142858 63Q 139.82142857142858 60 142.82142857142858 60L 162.89285714285717 60Q 165.89285714285717 60 165.89285714285717 63L 165.89285714285717 63L 165.89285714285717 375L 165.89285714285717 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 139.82142857142858 375L 139.82142857142858 63Q 139.82142857142858 60 142.82142857142858 60L 162.89285714285717 60Q 165.89285714285717 60 165.89285714285717 63L 165.89285714285717 63L 165.89285714285717 375L 165.89285714285717 375z"
                                                pathFrom="M 139.82142857142858 375L 139.82142857142858 375L 165.89285714285717 375L 165.89285714285717 375L 165.89285714285717 375L 165.89285714285717 375L 165.89285714285717 375L 139.82142857142858 375"
                                                cy="60" cx="240.89285714285714" j="1" val="294"
                                                barHeight="315" barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1560"
                                                d="M 243.39285714285714 375L 243.39285714285714 199.07142857142858Q 243.39285714285714 196.07142857142858 246.39285714285714 196.07142857142858L 266.4642857142857 196.07142857142858Q 269.4642857142857 196.07142857142858 269.4642857142857 199.07142857142858L 269.4642857142857 199.07142857142858L 269.4642857142857 375L 269.4642857142857 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 243.39285714285714 375L 243.39285714285714 199.07142857142858Q 243.39285714285714 196.07142857142858 246.39285714285714 196.07142857142858L 266.4642857142857 196.07142857142858Q 269.4642857142857 196.07142857142858 269.4642857142857 199.07142857142858L 269.4642857142857 199.07142857142858L 269.4642857142857 375L 269.4642857142857 375z"
                                                pathFrom="M 243.39285714285714 375L 243.39285714285714 375L 269.4642857142857 375L 269.4642857142857 375L 269.4642857142857 375L 269.4642857142857 375L 269.4642857142857 375L 243.39285714285714 375"
                                                cy="196.07142857142858" cx="344.46428571428567" j="2"
                                                val="167" barHeight="178.92857142857142"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1562"
                                                d="M 346.96428571428567 375L 346.96428571428567 186.21428571428572Q 346.96428571428567 183.21428571428572 349.96428571428567 183.21428571428572L 370.0357142857142 183.21428571428572Q 373.0357142857142 183.21428571428572 373.0357142857142 186.21428571428572L 373.0357142857142 186.21428571428572L 373.0357142857142 375L 373.0357142857142 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 346.96428571428567 375L 346.96428571428567 186.21428571428572Q 346.96428571428567 183.21428571428572 349.96428571428567 183.21428571428572L 370.0357142857142 183.21428571428572Q 373.0357142857142 183.21428571428572 373.0357142857142 186.21428571428572L 373.0357142857142 186.21428571428572L 373.0357142857142 375L 373.0357142857142 375z"
                                                pathFrom="M 346.96428571428567 375L 346.96428571428567 375L 373.0357142857142 375L 373.0357142857142 375L 373.0357142857142 375L 373.0357142857142 375L 373.0357142857142 375L 346.96428571428567 375"
                                                cy="183.21428571428572" cx="448.0357142857142" j="3"
                                                val="179" barHeight="191.78571428571428"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1564"
                                                d="M 450.5357142857142 375L 450.5357142857142 115.5Q 450.5357142857142 112.5 453.5357142857142 112.5L 473.6071428571428 112.5Q 476.6071428571428 112.5 476.6071428571428 115.5L 476.6071428571428 115.5L 476.6071428571428 375L 476.6071428571428 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 450.5357142857142 375L 450.5357142857142 115.5Q 450.5357142857142 112.5 453.5357142857142 112.5L 473.6071428571428 112.5Q 476.6071428571428 112.5 476.6071428571428 115.5L 476.6071428571428 115.5L 476.6071428571428 375L 476.6071428571428 375z"
                                                pathFrom="M 450.5357142857142 375L 450.5357142857142 375L 476.6071428571428 375L 476.6071428571428 375L 476.6071428571428 375L 476.6071428571428 375L 476.6071428571428 375L 450.5357142857142 375"
                                                cy="112.5" cx="551.6071428571428" j="4" val="245"
                                                barHeight="262.5" barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1566"
                                                d="M 554.1071428571428 375L 554.1071428571428 183Q 554.1071428571428 180 557.1071428571428 180L 577.1785714285713 180Q 580.1785714285713 180 580.1785714285713 183L 580.1785714285713 183L 580.1785714285713 375L 580.1785714285713 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 554.1071428571428 375L 554.1071428571428 183Q 554.1071428571428 180 557.1071428571428 180L 577.1785714285713 180Q 580.1785714285713 180 580.1785714285713 183L 580.1785714285713 183L 580.1785714285713 375L 580.1785714285713 375z"
                                                pathFrom="M 554.1071428571428 375L 554.1071428571428 375L 580.1785714285713 375L 580.1785714285713 375L 580.1785714285713 375L 580.1785714285713 375L 580.1785714285713 375L 554.1071428571428 375"
                                                cy="180" cx="655.1785714285713" j="5" val="182"
                                                barHeight="195" barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1568"
                                                d="M 657.6785714285713 375L 657.6785714285713 224.78571428571428Q 657.6785714285713 221.78571428571428 660.6785714285713 221.78571428571428L 680.7499999999999 221.78571428571428Q 683.7499999999999 221.78571428571428 683.7499999999999 224.78571428571428L 683.7499999999999 224.78571428571428L 683.7499999999999 375L 683.7499999999999 375z"
                                                fill="rgba(253,186,140,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 657.6785714285713 375L 657.6785714285713 224.78571428571428Q 657.6785714285713 221.78571428571428 660.6785714285713 221.78571428571428L 680.7499999999999 221.78571428571428Q 683.7499999999999 221.78571428571428 683.7499999999999 224.78571428571428L 683.7499999999999 224.78571428571428L 683.7499999999999 375L 683.7499999999999 375z"
                                                pathFrom="M 657.6785714285713 375L 657.6785714285713 375L 683.7499999999999 375L 683.7499999999999 375L 683.7499999999999 375L 683.7499999999999 375L 683.7499999999999 375L 657.6785714285713 375"
                                                cy="221.78571428571428" cx="758.7499999999999" j="6"
                                                val="143" barHeight="153.21428571428572"
                                                barWidth="31.071428571428573"></path>
                                            <g id="SvgjsG1554" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG1555" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1557" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1559" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1561" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1563" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1565" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1567" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1569" class="apexcharts-series" rel="3"
                                            seriesName="GamingxConsole" data:realIndex="2">
                                            <path id="SvgjsPath1573"
                                                d="M 67.32142857142857 375L 67.32142857142857 142.28571428571428Q 67.32142857142857 139.28571428571428 70.32142857142857 139.28571428571428L 90.39285714285714 139.28571428571428Q 93.39285714285714 139.28571428571428 93.39285714285714 142.28571428571428L 93.39285714285714 142.28571428571428L 93.39285714285714 375L 93.39285714285714 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 67.32142857142857 375L 67.32142857142857 142.28571428571428Q 67.32142857142857 139.28571428571428 70.32142857142857 139.28571428571428L 90.39285714285714 139.28571428571428Q 93.39285714285714 139.28571428571428 93.39285714285714 142.28571428571428L 93.39285714285714 142.28571428571428L 93.39285714285714 375L 93.39285714285714 375z"
                                                pathFrom="M 67.32142857142857 375L 67.32142857142857 375L 93.39285714285714 375L 93.39285714285714 375L 93.39285714285714 375L 93.39285714285714 375L 93.39285714285714 375L 67.32142857142857 375"
                                                cy="139.28571428571428" cx="168.39285714285714" j="0"
                                                val="220" barHeight="235.71428571428572"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1575"
                                                d="M 170.89285714285714 375L 170.89285714285714 170.14285714285714Q 170.89285714285714 167.14285714285714 173.89285714285714 167.14285714285714L 193.96428571428572 167.14285714285714Q 196.96428571428572 167.14285714285714 196.96428571428572 170.14285714285714L 196.96428571428572 170.14285714285714L 196.96428571428572 375L 196.96428571428572 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 170.89285714285714 375L 170.89285714285714 170.14285714285714Q 170.89285714285714 167.14285714285714 173.89285714285714 167.14285714285714L 193.96428571428572 167.14285714285714Q 196.96428571428572 167.14285714285714 196.96428571428572 170.14285714285714L 196.96428571428572 170.14285714285714L 196.96428571428572 375L 196.96428571428572 375z"
                                                pathFrom="M 170.89285714285714 375L 170.89285714285714 375L 196.96428571428572 375L 196.96428571428572 375L 196.96428571428572 375L 196.96428571428572 375L 196.96428571428572 375L 170.89285714285714 375"
                                                cy="167.14285714285714" cx="271.9642857142857" j="1"
                                                val="194" barHeight="207.85714285714286"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1577"
                                                d="M 274.4642857142857 375L 274.4642857142857 145.5Q 274.4642857142857 142.5 277.4642857142857 142.5L 297.5357142857143 142.5Q 300.5357142857143 142.5 300.5357142857143 145.5L 300.5357142857143 145.5L 300.5357142857143 375L 300.5357142857143 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 274.4642857142857 375L 274.4642857142857 145.5Q 274.4642857142857 142.5 277.4642857142857 142.5L 297.5357142857143 142.5Q 300.5357142857143 142.5 300.5357142857143 145.5L 300.5357142857143 145.5L 300.5357142857143 375L 300.5357142857143 375z"
                                                pathFrom="M 274.4642857142857 375L 274.4642857142857 375L 300.5357142857143 375L 300.5357142857143 375L 300.5357142857143 375L 300.5357142857143 375L 300.5357142857143 375L 274.4642857142857 375"
                                                cy="142.5" cx="375.5357142857143" j="2" val="217"
                                                barHeight="232.5" barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1579"
                                                d="M 378.0357142857143 375L 378.0357142857143 79.07142857142856Q 378.0357142857143 76.07142857142856 381.0357142857143 76.07142857142856L 401.10714285714283 76.07142857142856Q 404.10714285714283 76.07142857142856 404.10714285714283 79.07142857142856L 404.10714285714283 79.07142857142856L 404.10714285714283 375L 404.10714285714283 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 378.0357142857143 375L 378.0357142857143 79.07142857142856Q 378.0357142857143 76.07142857142856 381.0357142857143 76.07142857142856L 401.10714285714283 76.07142857142856Q 404.10714285714283 76.07142857142856 404.10714285714283 79.07142857142856L 404.10714285714283 79.07142857142856L 404.10714285714283 375L 404.10714285714283 375z"
                                                pathFrom="M 378.0357142857143 375L 378.0357142857143 375L 404.10714285714283 375L 404.10714285714283 375L 404.10714285714283 375L 404.10714285714283 375L 404.10714285714283 375L 378.0357142857143 375"
                                                cy="76.07142857142856" cx="479.10714285714283" j="3"
                                                val="279" barHeight="298.92857142857144"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1581"
                                                d="M 481.60714285714283 375L 481.60714285714283 147.64285714285714Q 481.60714285714283 144.64285714285714 484.60714285714283 144.64285714285714L 504.67857142857144 144.64285714285714Q 507.67857142857144 144.64285714285714 507.67857142857144 147.64285714285714L 507.67857142857144 147.64285714285714L 507.67857142857144 375L 507.67857142857144 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 481.60714285714283 375L 481.60714285714283 147.64285714285714Q 481.60714285714283 144.64285714285714 484.60714285714283 144.64285714285714L 504.67857142857144 144.64285714285714Q 507.67857142857144 144.64285714285714 507.67857142857144 147.64285714285714L 507.67857142857144 147.64285714285714L 507.67857142857144 375L 507.67857142857144 375z"
                                                pathFrom="M 481.60714285714283 375L 481.60714285714283 375L 507.67857142857144 375L 507.67857142857144 375L 507.67857142857144 375L 507.67857142857144 375L 507.67857142857144 375L 481.60714285714283 375"
                                                cy="144.64285714285714" cx="582.6785714285713" j="4"
                                                val="215" barHeight="230.35714285714286"
                                                barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1583"
                                                d="M 585.1785714285713 375L 585.1785714285713 96.21428571428572Q 585.1785714285713 93.21428571428572 588.1785714285713 93.21428571428572L 608.2499999999999 93.21428571428572Q 611.2499999999999 93.21428571428572 611.2499999999999 96.21428571428572L 611.2499999999999 96.21428571428572L 611.2499999999999 375L 611.2499999999999 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 585.1785714285713 375L 585.1785714285713 96.21428571428572Q 585.1785714285713 93.21428571428572 588.1785714285713 93.21428571428572L 608.2499999999999 93.21428571428572Q 611.2499999999999 93.21428571428572 611.2499999999999 96.21428571428572L 611.2499999999999 96.21428571428572L 611.2499999999999 375L 611.2499999999999 375z"
                                                pathFrom="M 585.1785714285713 375L 585.1785714285713 375L 611.2499999999999 375L 611.2499999999999 375L 611.2499999999999 375L 611.2499999999999 375L 611.2499999999999 375L 585.1785714285713 375"
                                                cy="93.21428571428572" cx="686.2499999999999" j="5" val="263"
                                                barHeight="281.7857142857143" barWidth="31.071428571428573"></path>
                                            <path id="SvgjsPath1585"
                                                d="M 688.7499999999999 375L 688.7499999999999 181.92857142857144Q 688.7499999999999 178.92857142857144 691.7499999999999 178.92857142857144L 711.8214285714284 178.92857142857144Q 714.8214285714284 178.92857142857144 714.8214285714284 181.92857142857144L 714.8214285714284 181.92857142857144L 714.8214285714284 375L 714.8214285714284 375z"
                                                fill="rgba(23,176,189,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="2"
                                                clip-path="url(#gridRectMaskhrbuydw1)"
                                                pathTo="M 688.7499999999999 375L 688.7499999999999 181.92857142857144Q 688.7499999999999 178.92857142857144 691.7499999999999 178.92857142857144L 711.8214285714284 178.92857142857144Q 714.8214285714284 178.92857142857144 714.8214285714284 181.92857142857144L 714.8214285714284 181.92857142857144L 714.8214285714284 375L 714.8214285714284 375z"
                                                pathFrom="M 688.7499999999999 375L 688.7499999999999 375L 714.8214285714284 375L 714.8214285714284 375L 714.8214285714284 375L 714.8214285714284 375L 714.8214285714284 375L 688.7499999999999 375"
                                                cy="178.92857142857144" cx="789.8214285714284" j="6"
                                                val="183" barHeight="196.07142857142856"
                                                barWidth="31.071428571428573"></path>
                                            <g id="SvgjsG1571" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG1572" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1574" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1576" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1578" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1580" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1582" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1584" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1536" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1553" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        <g id="SvgjsG1570" class="apexcharts-datalabels" data:realIndex="2"></g>
                                    </g>
                                    <line id="SvgjsLine1607" x1="0" y1="0" x2="725"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1608" x1="0" y1="0" x2="725"
                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1609" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1610" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1611" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1595" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-18, 0)"></g>
                                <g id="SvgjsG1525" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 210px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Inter, sans-serif; font-size: 14px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(26, 86, 219);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(253, 186, 140);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(23, 176, 189);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div
                        class="flex items-center justify-between pt-3 mt-4 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                        <div>
                            <button
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                                type="button" data-dropdown-toggle="sales-by-category-dropdown">Last 7 days <svg
                                    class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="sales-by-category-dropdown" data-popper-reference-hidden=""
                                data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1167px, 965px);">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white"
                                        role="none">
                                        Sep 16, 2021 - Sep 22, 2021
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Yesterday</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Today</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 7 days</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 30 days</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Last 90 days</a>
                                    </li>
                                </ul>
                                <div class="py-1" role="none">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Custom...</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#"
                                class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                Sales Report
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by device</h3>
                            <span
                                class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
                        </div>
                        <a href="#"
                            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                            Full report
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    <div id="traffic-by-device" style="min-height: 378.7px;">
                        <div id="apexchartskxkvpl6u"
                            class="apexcharts-canvas apexchartskxkvpl6u apexcharts-theme-light"
                            style="width: 747px; height: 378.7px;"><svg id="SvgjsSvg1676" width="747"
                                height="378.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1678" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(186.5, 0)">
                                    <defs id="SvgjsDefs1677">
                                        <clipPath id="gridRectMaskkxkvpl6u">
                                            <rect id="SvgjsRect1680" width="382" height="400" x="-3" y="-1"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskkxkvpl6u"></clipPath>
                                        <clipPath id="nonForecastMaskkxkvpl6u"></clipPath>
                                        <clipPath id="gridRectMarkerMaskkxkvpl6u">
                                            <rect id="SvgjsRect1681" width="380" height="402" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1682" class="apexcharts-pie">
                                        <g id="SvgjsG1683" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle1684" r="115.31951219512197" cx="188"
                                                cy="188" fill="transparent"></circle>
                                            <g id="SvgjsG1685" class="apexcharts-slices">
                                                <g id="SvgjsG1686" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Desktop" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1687"
                                                        d="M 188 10.585365853658516 A 177.41463414634148 177.41463414634148 0 1 1 19.268656109001284 242.82413700203338 L 78.32462647085082 223.6356890513217 A 115.31951219512197 115.31951219512197 0 1 0 188 72.68048780487803 L 188 10.585365853658516 z"
                                                        fill="rgba(22,189,202,1)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                        index="0" j="0" data:angle="252" data:startAngle="0"
                                                        data:strokeWidth="2" data:value="70"
                                                        data:pathOrig="M 188 10.585365853658516 A 177.41463414634148 177.41463414634148 0 1 1 19.268656109001284 242.82413700203338 L 78.32462647085082 223.6356890513217 A 115.31951219512197 115.31951219512197 0 1 0 188 72.68048780487803 L 188 10.585365853658516 z"
                                                        stroke="#1f2937"></path>
                                                </g>
                                                <g id="SvgjsG1688" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Tablet" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1689"
                                                        d="M 19.268656109001284 242.82413700203338 A 177.41463414634148 177.41463414634148 0 0 1 10.585365853658516 188.00000000000003 L 72.68048780487803 188 A 115.31951219512197 115.31951219512197 0 0 0 78.32462647085082 223.6356890513217 L 19.268656109001284 242.82413700203338 z"
                                                        fill="rgba(253,186,140,1)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                        index="0" j="1" data:angle="18" data:startAngle="252"
                                                        data:strokeWidth="2" data:value="5"
                                                        data:pathOrig="M 19.268656109001284 242.82413700203338 A 177.41463414634148 177.41463414634148 0 0 1 10.585365853658516 188.00000000000003 L 72.68048780487803 188 A 115.31951219512197 115.31951219512197 0 0 0 78.32462647085082 223.6356890513217 L 19.268656109001284 242.82413700203338 z"
                                                        stroke="#1f2937"></path>
                                                </g>
                                                <g id="SvgjsG1690" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Phone" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath1691"
                                                        d="M 10.585365853658516 188.00000000000003 A 177.41463414634148 177.41463414634148 0 0 1 187.96903530508644 10.585368555837903 L 187.97987294830617 72.68048956129464 A 115.31951219512197 115.31951219512197 0 0 0 72.68048780487803 188 L 10.585365853658516 188.00000000000003 z"
                                                        fill="rgba(26,86,219,1)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                        index="0" j="2" data:angle="90" data:startAngle="270"
                                                        data:strokeWidth="2" data:value="25"
                                                        data:pathOrig="M 10.585365853658516 188.00000000000003 A 177.41463414634148 177.41463414634148 0 0 1 187.96903530508644 10.585368555837903 L 187.97987294830617 72.68048956129464 A 115.31951219512197 115.31951219512197 0 0 0 72.68048780487803 188 L 10.585365853658516 188.00000000000003 z"
                                                        stroke="#1f2937"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine1692" x1="0" y1="0" x2="376"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1693" x1="0" y1="0" x2="376"
                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG1679" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(22, 189, 202);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(253, 186, 140);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(26, 86, 219);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 14px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="flex items-center justify-between pt-4 lg:justify-evenly sm:pt-6">
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.25A2.25 2.25 0 014.25 2h11.5A2.25 2.25 0 0118 4.25v8.5A2.25 2.25 0 0115.75 15h-3.105a3.501 3.501 0 001.1 1.677A.75.75 0 0113.26 18H6.74a.75.75 0 01-.484-1.323A3.501 3.501 0 007.355 15H4.25A2.25 2.25 0 012 12.75v-8.5zm1.5 0a.75.75 0 01.75-.75h11.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H4.25a.75.75 0 01-.75-.75v-7.5z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Desktop</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                234k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                    4%
                                </span>
                                vs last month
                            </p>
                        </div>
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M8 16.25a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z">
                                </path>
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M4 4a3 3 0 013-3h6a3 3 0 013 3v12a3 3 0 01-3 3H7a3 3 0 01-3-3V4zm4-1.5v.75c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75V2.5h1A1.5 1.5 0 0114.5 4v12a1.5 1.5 0 01-1.5 1.5H7A1.5 1.5 0 015.5 16V4A1.5 1.5 0 017 2.5h1z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Phone</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                94k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                    1%
                                </span>
                                vs last month
                            </p>
                        </div>
                        <div>
                            <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M5 1a3 3 0 00-3 3v12a3 3 0 003 3h10a3 3 0 003-3V4a3 3 0 00-3-3H5zM3.5 4A1.5 1.5 0 015 2.5h10A1.5 1.5 0 0116.5 4v12a1.5 1.5 0 01-1.5 1.5H5A1.5 1.5 0 013.5 16V4zm5.25 11.5a.75.75 0 000 1.5h2.5a.75.75 0 000-1.5h-2.5z">
                                </path>
                            </svg>
                            <h3 class="text-gray-500 dark:text-gray-400">Tablet</h3>
                            <h4 class="text-xl font-bold dark:text-white">
                                16k
                            </h4>
                            <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <span class="flex items-center mr-1.5 text-sm text-red-600 dark:text-red-500">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                    0,6%
                                </span>
                                vs last month
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Transactions</h3>
                    <span class="text-base font-normal text-gray-500 dark:text-gray-400">This is a list of latest
                        transactions</span>
                </div>
                <div class="items-center sm:flex">
                    <div class="flex items-center">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                            class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                            type="button">
                            Filter by status
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1251px, 2378px);">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                Category
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Completed (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value="" checked=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Cancelled (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="dell" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="dell"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        In progress (56)
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="asus" type="checkbox" value="" checked=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">

                                    <label for="asus"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        In review (97)
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div date-rangepicker="" class="flex items-center space-x-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                    </path>
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                    </path>
                                </svg>
                            </div>
                            <input name="start" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                placeholder="From">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z">
                                    </path>
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z">
                                    </path>
                                </svg>
                            </div>
                            <input name="end" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 datepicker-input"
                                placeholder="To">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="flex flex-col mt-6">
                <div class="overflow-x-auto rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Transaction
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Date &amp; Time
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Amount
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Reference number
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Payment method
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800">
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Bonnie Green</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $2300
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0047568936
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 475</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment refund to <span class="font-semibold">#00910</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            -$670
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0078568936
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 924</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment failed from <span class="font-semibold">#087651</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 18 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $234
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0088568934
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 826</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-red-100 dark:border-red-400 dark:bg-gray-700 dark:text-red-400">Cancelled</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Lana Byrd</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 15 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $5000
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0018568911
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 634</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">In
                                                progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Jese Leos</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 15 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $2300
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0045568939
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 163</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Refund to <span class="font-semibold">THEMESBERG LLC</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 11 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            -$560
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0031568935
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 443</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">In
                                                review</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Lana Lysle</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 6 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $1437
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0023568934
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 223</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100 dark:bg-gray-700 dark:border-orange-300 dark:text-orange-300">In
                                                review</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment to <span class="font-semibold">Joseph Mcfall</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Apr 1 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $980
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0057568935
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-6 h-6" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 83">
                                                <defs>
                                                    <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%"
                                                        y1="-2.006%" y2="100%">
                                                        <stop offset="0%" stop-color="#222357"></stop>
                                                        <stop offset="100%" stop-color="#254AA5"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosVisa0)"
                                                    d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963h-17.665m3.037-21.601l6.265-30.027h-17.158l10.893 30.027m-118.599 21.6L88.964 1.246h20.687l17.104 79.963h-20.679m-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963H75.473"
                                                    transform="matrix(1 0 0 -1 0 82.668)"></path>
                                            </svg>
                                            <span>••• 363</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Alphabet LLC</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Mar 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $11,436
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            00836143841
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 771</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-purple-100 text-purple-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-purple-100 dark:bg-gray-700 dark:border-purple-500 dark:text-purple-400">In
                                                progress</span>
                                        </td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-gray-700">
                                        <td
                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                            Payment from <span class="font-semibold">Bonnie Green</span>
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Mar 23 ,2021
                                        </td>
                                        <td
                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                            $560
                                        </td>
                                        <td
                                            class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            0031568935
                                        </td>
                                        <td
                                            class="inline-flex items-center p-4 space-x-2 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <svg class="w-7 h-7" aria-hidden="true"
                                                enable-background="new 0 0 780 500" viewBox="0 0 780 500"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m449.01 250c0 99.143-80.371 179.5-179.51 179.5s-179.5-80.361-179.5-179.5c0-99.133 80.362-179.5 179.5-179.5 99.137 0 179.51 80.371 179.51 179.5"
                                                    fill="#d9222a"></path>
                                                <path
                                                    d="m510.49 70.496c-46.379 0-88.643 17.596-120.5 46.467-6.49 5.889-12.548 12.237-18.125 18.996h36.267c4.965 6.037 9.536 12.387 13.685 19.012h-63.635c-3.827 6.122-7.281 12.469-10.342 19.008h84.313c2.894 6.185 5.431 12.53 7.601 19.004h-99.513c-2.09 6.234-3.832 12.58-5.217 19.008h109.94c2.689 12.49 4.045 25.231 4.042 38.008 0 19.935-3.254 39.112-9.254 57.021h-99.513c2.164 6.477 4.7 12.824 7.596 19.008h84.316c-3.063 6.541-6.519 12.889-10.347 19.013h-63.625c4.147 6.62 8.719 12.966 13.685 18.996h36.259c-5.57 6.772-11.63 13.127-18.13 19.013 31.857 28.866 74.117 46.454 120.5 46.454 99.139 0 179.51-80.361 179.51-179.5 0-99.129-80.371-179.5-179.51-179.5"
                                                    fill="#ee9f2d"></path>
                                                <path
                                                    d="m666.07 350.06c0-3.199 2.592-5.801 5.796-5.801s5.796 2.602 5.796 5.801-2.592 5.801-5.796 5.801-5.796-2.602-5.796-5.801zm5.796 4.408c2.434-.001 4.407-1.974 4.408-4.408 0-2.432-1.971-4.402-4.402-4.404h-.006c-2.429-.003-4.4 1.963-4.404 4.391v.014c-.002 2.433 1.968 4.406 4.4 4.408.001-.001.003-.001.004-.001zm-.783-1.86h-1.187v-5.096h2.149c.45 0 .908 0 1.305.254.413.279.646.771.646 1.279 0 .571-.338 1.104-.884 1.312l.938 2.25h-1.315l-.779-2.017h-.871zm0-2.89h.658c.246 0 .505.021.726-.1.195-.125.296-.359.296-.584-.005-.209-.112-.402-.288-.518-.207-.129-.536-.101-.758-.101h-.634zm-443.5-80.063c-2.046-.238-2.945-.301-4.35-.301-11.046 0-16.638 3.787-16.638 11.268 0 4.611 2.729 7.545 6.987 7.545 7.939 0 13.659-7.559 14.001-18.512zm14.171 32.996h-16.146l.371-7.676c-4.926 6.065-11.496 8.949-20.426 8.949-10.563 0-17.804-8.25-17.804-20.229 0-18.024 12.596-28.541 34.217-28.541 2.208 0 5.042.199 7.941.57.604-2.441.763-3.488.763-4.801 0-4.908-3.396-6.737-12.5-6.737-9.533-.108-17.396 2.271-20.625 3.333.204-1.229 2.7-16.659 2.7-16.659 9.712-2.846 16.116-3.917 23.325-3.917 16.732 0 25.596 7.513 25.579 21.712.033 3.805-.597 8.5-1.579 14.671-1.691 10.734-5.32 33.721-5.816 39.325zm-62.158 0h-19.487l11.162-69.997-24.925 69.997h-13.279l-1.642-69.597-11.733 69.597h-18.242l15.237-91.056h28.021l1.7 50.968 17.092-50.968h31.167zm354.97-32.996c-2.037-.238-2.941-.301-4.342-.301-11.041 0-16.634 3.787-16.634 11.268 0 4.611 2.726 7.545 6.983 7.545 7.94 0 13.664-7.559 13.993-18.512zm14.184 32.996h-16.146l.366-7.676c-4.926 6.065-11.5 8.949-20.422 8.949-10.565 0-17.8-8.25-17.8-20.229 0-18.024 12.588-28.541 34.213-28.541 2.208 0 5.037.199 7.934.57.604-2.441.763-3.488.763-4.801 0-4.908-3.392-6.737-12.496-6.737-9.533-.108-17.387 2.271-20.629 3.333.204-1.229 2.709-16.659 2.709-16.659 9.712-2.846 16.112-3.917 23.313-3.917 16.74 0 25.604 7.513 25.587 21.712.032 3.805-.597 8.5-1.579 14.671-1.684 10.734-5.321 33.721-5.813 39.325zm-220.39-1.125c-5.333 1.679-9.491 2.398-14 2.398-9.962 0-15.399-5.725-15.399-16.267-.142-3.271 1.433-11.88 2.671-19.737 1.125-6.917 8.449-50.529 8.449-50.529h19.371l-2.263 11.208h11.699l-2.642 17.796h-11.742c-2.25 14.083-5.454 31.625-5.491 33.95 0 3.816 2.037 5.483 6.671 5.483 2.221 0 3.94-.227 5.254-.7zm59.392-.6c-6.654 2.034-13.075 3.017-19.879 3-21.684-.021-32.987-11.346-32.987-33.032 0-25.313 14.38-43.947 33.899-43.947 15.971 0 26.171 10.433 26.171 26.796 0 5.429-.7 10.729-2.388 18.212h-38.574c-1.305 10.741 5.57 15.217 16.837 15.217 6.935 0 13.188-1.429 20.142-4.663zm-10.888-43.9c.107-1.543 2.055-13.217-9.013-13.217-6.171 0-10.583 4.704-12.38 13.217zm-123.42-5.017c0 9.367 4.542 15.826 14.842 20.676 7.892 3.709 9.112 4.81 9.112 8.17 0 4.617-3.479 6.701-11.191 6.701-5.813 0-11.221-.908-17.458-2.922 0 0-2.563 16.321-2.68 17.102 4.43.967 8.38 1.861 20.279 2.19 20.563 0 30.059-7.829 30.059-24.75 0-10.175-3.976-16.146-13.737-20.634-8.171-3.75-9.108-4.587-9.108-8.045 0-4.004 3.237-6.046 9.537-6.046 3.825 0 9.05.408 14 1.112l2.775-17.175c-5.046-.8-12.696-1.442-17.15-1.442-21.801.001-29.347 11.388-29.28 25.063m229.09-23.116c5.412 0 10.458 1.421 17.412 4.921l3.188-19.763c-2.854-1.121-12.904-7.7-21.417-7.7-13.041 0-24.065 6.471-31.82 17.15-11.309-3.746-15.958 3.825-21.657 11.367l-5.063 1.179c.383-2.483.729-4.95.612-7.446h-17.896c-2.445 22.917-6.778 46.128-10.171 69.075l-.884 4.976h19.496c3.254-21.143 5.037-34.68 6.121-43.842l7.341-4.084c1.097-4.078 4.529-5.458 11.417-5.291-.926 5.008-1.389 10.091-1.383 15.184 0 24.225 13.07 39.308 34.05 39.308 5.404 0 10.041-.712 17.221-2.658l3.43-20.759c-6.458 3.181-11.759 4.677-16.559 4.677-11.329 0-18.184-8.363-18.184-22.185 0-20.051 10.196-34.109 24.746-34.109">
                                                </path>
                                                <path
                                                    d="m185.21 297.24h-19.491l11.171-69.988-24.926 69.988h-13.283l-1.642-69.588-11.733 69.588h-18.241l15.237-91.042h28.021l.788 56.362 18.904-56.362h30.267z"
                                                    fill="#fff"></path>
                                                <path
                                                    d="m647.52 211.6-4.321 26.309c-5.329-7.013-11.054-12.088-18.612-12.088-9.833 0-18.783 7.455-24.642 18.425-8.158-1.692-16.597-4.563-16.597-4.563l-.004.067c.658-6.134.921-9.875.862-11.146h-17.9c-2.438 22.917-6.771 46.128-10.157 69.075l-.893 4.976h19.492c2.633-17.096 4.648-31.291 6.133-42.551 6.658-6.016 9.992-11.266 16.721-10.916-2.979 7.205-4.725 15.503-4.725 24.017 0 18.513 9.366 30.725 23.533 30.725 7.142 0 12.621-2.462 17.967-8.171l-.913 6.884h18.435l14.842-91.042zm-24.371 73.941c-6.634 0-9.983-4.908-9.983-14.596 0-14.555 6.271-24.875 15.112-24.875 6.695 0 10.32 5.104 10.32 14.509.001 14.679-6.37 24.962-15.449 24.962z">
                                                </path>
                                                <path
                                                    d="m233.19 264.26c-2.042-.236-2.946-.299-4.346-.299-11.046 0-16.634 3.787-16.634 11.266 0 4.604 2.729 7.547 6.979 7.547 7.947-.001 13.668-7.559 14.001-18.514zm14.178 32.984h-16.146l.367-7.663c-4.921 6.054-11.5 8.95-20.421 8.95-10.567 0-17.805-8.25-17.805-20.229 0-18.032 12.592-28.542 34.217-28.542 2.208 0 5.042.2 7.938.571.604-2.441.763-3.487.763-4.808 0-4.909-3.392-6.729-12.496-6.729-9.537-.108-17.396 2.271-20.629 3.321.204-1.225 2.7-16.637 2.7-16.637 9.708-2.858 16.12-3.929 23.32-3.929 16.737 0 25.604 7.517 25.588 21.704.029 3.821-.604 8.513-1.584 14.675-1.687 10.724-5.319 33.724-5.812 39.316zm261.38-88.592-3.191 19.767c-6.95-3.496-12-4.92-17.407-4.92-14.551 0-24.75 14.058-24.75 34.106 0 13.821 6.857 22.181 18.184 22.181 4.8 0 10.096-1.492 16.554-4.675l-3.421 20.75c-7.184 1.957-11.816 2.67-17.225 2.67-20.977 0-34.051-15.084-34.051-39.309 0-32.55 18.059-55.3 43.888-55.3 8.507.001 18.561 3.609 21.419 4.73m31.443 55.608c-2.041-.236-2.941-.299-4.347-.299-11.041 0-16.633 3.787-16.633 11.266 0 4.604 2.729 7.547 6.983 7.547 7.938-.001 13.663-7.559 13.997-18.514zm14.178 32.984h-16.15l.371-7.663c-4.925 6.054-11.5 8.95-20.421 8.95-10.563 0-17.804-8.25-17.804-20.229 0-18.032 12.596-28.542 34.212-28.542 2.213 0 5.042.2 7.941.571.601-2.441.763-3.487.763-4.808 0-4.909-3.393-6.729-12.495-6.729-9.533-.108-17.396 2.271-20.63 3.321.204-1.225 2.704-16.637 2.704-16.637 9.709-2.858 16.116-3.929 23.316-3.929 16.741 0 25.604 7.517 25.583 21.704.033 3.821-.596 8.513-1.579 14.675-1.682 10.724-5.323 33.724-5.811 39.316zm-220.39-1.121c-5.338 1.679-9.496 2.408-14 2.408-9.962 0-15.399-5.726-15.399-16.268-.138-3.279 1.438-11.88 2.675-19.736 1.12-6.926 8.445-50.534 8.445-50.534h19.368l-2.26 11.212h9.941l-2.646 17.788h-9.975c-2.25 14.092-5.463 31.62-5.496 33.95 0 3.83 2.041 5.482 6.671 5.482 2.221 0 3.938-.216 5.254-.691zm59.391-.592c-6.65 2.033-13.079 3.012-19.879 3-21.685-.021-32.987-11.346-32.987-33.033 0-25.321 14.379-43.95 33.899-43.95 15.971 0 26.171 10.429 26.171 26.8 0 5.434-.7 10.733-2.384 18.212h-38.574c-1.306 10.741 5.569 15.222 16.837 15.222 6.93 0 13.188-1.435 20.138-4.677zm-10.891-43.912c.116-1.538 2.06-13.217-9.013-13.217-6.167 0-10.579 4.717-12.375 13.217zm-123.42-5.005c0 9.367 4.542 15.818 14.842 20.675 7.892 3.709 9.112 4.812 9.112 8.172 0 4.616-3.483 6.699-11.188 6.699-5.816 0-11.225-.908-17.467-2.921 0 0-2.554 16.321-2.671 17.101 4.421.967 8.375 1.85 20.275 2.191 20.566 0 30.059-7.829 30.059-24.746 0-10.18-3.971-16.15-13.737-20.637-8.167-3.759-9.113-4.584-9.113-8.046 0-4 3.246-6.059 9.542-6.059 3.821 0 9.046.421 14.004 1.125l2.771-17.179c-5.042-.8-12.692-1.441-17.146-1.441-21.804 0-29.346 11.379-29.283 25.066m398.45 50.63h-18.438l.917-6.893c-5.347 5.717-10.825 8.18-17.968 8.18-14.166 0-23.528-12.213-23.528-30.726 0-24.63 14.521-45.392 31.708-45.392 7.559 0 13.279 3.087 18.604 10.096l4.325-26.308h19.221zm-28.746-17.109c9.075 0 15.45-10.283 15.45-24.953 0-9.405-3.629-14.509-10.325-14.509-8.837 0-15.115 10.315-15.115 24.875-.001 9.686 3.357 14.587 9.99 14.587zm-56.842-56.929c-2.441 22.917-6.773 46.13-10.162 69.063l-.892 4.976h19.491c6.972-45.275 8.658-54.117 19.588-53.009 1.742-9.267 4.982-17.383 7.399-21.479-8.163-1.7-12.721 2.913-18.688 11.675.471-3.788 1.333-7.467 1.162-11.225zm-160.42 0c-2.446 22.917-6.779 46.13-10.167 69.063l-.888 4.976h19.5c6.963-45.275 8.646-54.117 19.57-53.009 1.75-9.267 4.991-17.383 7.399-21.479-8.154-1.7-12.717 2.913-18.679 11.675.471-3.788 1.324-7.467 1.162-11.225zm254.57 68.241c-.004-3.199 2.586-5.795 5.784-5.799h.012c3.197-.004 5.793 2.586 5.796 5.783v.016c-.001 3.201-2.595 5.795-5.796 5.797-3.201-.002-5.795-2.596-5.796-5.797zm5.796 4.405c2.431.002 4.402-1.969 4.403-4.399v-.004c.003-2.433-1.968-4.406-4.399-4.408h-.004c-2.435.001-4.407 1.974-4.408 4.408.002 2.432 1.975 4.403 4.408 4.403zm-.784-1.871h-1.188v-5.082h2.153c.446 0 .909.009 1.296.254.417.283.654.767.654 1.274 0 .575-.337 1.112-.888 1.317l.941 2.236h-1.32l-.779-2.009h-.87zm0-2.879h.653c.246 0 .513.019.729-.1.196-.125.296-.361.296-.588-.009-.21-.114-.404-.287-.523-.204-.117-.542-.084-.763-.084h-.629z"
                                                    fill="#fff"></path>
                                            </svg>
                                            <span>••• 023</span>
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">Completed</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Footer -->
            <div class="flex items-center justify-between pt-3 sm:pt-6">
                <div>
                    <button
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                        type="button" data-dropdown-toggle="transactions-dropdown">Last 7 days <svg
                            class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="transactions-dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(355px, 3110px);">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white" role="none">
                                Sep 16, 2021 - Sep 22, 2021
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Yesterday</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Today</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Last 7 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Last 30 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Last 90 days</a>
                            </li>
                        </ul>
                        <div class="py-1" role="none">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">Custom...</a>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="#"
                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                        Transactions Report
                        <svg class="w-4 h-4 ml-1 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-forms.modals.change-password />
</section>
