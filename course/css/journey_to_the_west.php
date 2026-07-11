<?php header("Content-Type: text/css"); ?>


.journey_to_the_west { /* 主視覺容器 */
	height: 600px; /* 高度為滿版 */
	width: 100%;
	-webkit-background-size: cover; /* 背景圖片覆蓋容器（WebKit 瀏覽器） */
	background-size: cover;/* 背景圖片覆蓋容器 */
	overflow: hidden;/* 隱藏超出容器的內容 */
	position: relative; /* 設為相對定位，供內部絕對定位元素參考 */
	
	
}
.journey_to_the_west ul { /* 背景動畫用的 UL 容器 */
	height: 100%; /* 高度 100% */
	width: 4920px;/* 超寬度：用於左右移動的背景 */
	position: absolute;/* 絕對定位 */
	top: 0;
	left: 0;
	animation: dong 50s linear infinite; /* 套用名為 dong 的動畫，50 秒循環播放 */

}
@keyframes dong { /* 背景平移動畫 */		
	0%   { transform: translate3d(0, 0, 0); }
	100% { transform: translate3d(1920px, 0, 0); } /* 往右，同方向；改成精準 1920px */
}
.journey_to_the_west ul li { /* 背景圖片的每個區塊 */
	height: 100%; /* 高度填滿 */
	width: 100%; /* 寬度填滿 */
	background: url(<?='/files/imgs/bg/png/farm_bg_51.png'?>); /* 設定背景圖片 */
	float: left; /* 向左浮動排列 */
	margin-left: -2000px; /* 左邊向外偏移，使背景拼接效果 */
}
.wk { /* 角色 wk（走路角色） */
	z-index: 999; /* 置於最上層 */
	width: 200px; /* 元素寬度 */
	height: 260px; /* 元素高度 */
	background: url("https://snoweryi.github.io/kid/course/img/j/1.png") 0 0 no-repeat; /* wk 角色的 sprite 圖片 */
	/*margin: 400px auto;*/ /*（註解）置中用的 margin */
	position: absolute; /* 絕對定位 */
	top: 44%; /* 距離上方 55% */
	left: 20%; /* 距離左邊 20% */
	animation: wkzou 1s steps(8) infinite; /* 1 秒內播放 8 格步進動畫，重複播放 */
}
@keyframes wkzou { /* wk 的走路動畫 */
	to {
		background-position: -1600px 0; /* 背景向左移動 1600px 播放完 8 格 */
	}
}
.bj { /* 角色 bj */
	z-index: 999; /* 最上層 */
	width: 200px; /* 寬度 */
	height: 260px; /* 高度 */
	background: url("https://snoweryi.github.io/kid/course/img/j/2.png") 0 0 no-repeat; /* bj 角色 sprite 圖片 */
	/*margin: 400px auto;*/ /*（註解）原置中設定未使用 */
	position: absolute; /* 絕對定位 */
	top: 44%; /* 距離上方 55% */
	left: 35%; /* 距離左邊 35% */
	animation: bjzou 1s steps(8) infinite; /* bj 走路動畫 */
}
@keyframes bjzou { /* bj 的走路動畫 */
	to {
		background-position: -1600px 0; /* 播放 sprite 的 8 格 */
	}
}
.ts { /* 角色 ts */
	z-index: 999; /* 最上層 */
	width: 170px; /* 寬度 */
	height: 300px; /* 高度 https://2.bp.blogspot.com/-OJnegbUvO6U/W0LSg_bKimI/AAAAAAAACXo/znUiDf8IOsIjUH-0VN1a3dzeicDP7i1QgCLcBGAs/s1600/5.png*/
	background: url("https://snoweryi.github.io/kid/course/img/j/3.png") 0 0 no-repeat; /* ts 角色 sprite 圖 */
	/*margin: 400px auto;*/ /*（註解）未使用 */
	position: absolute; /* 絕對定位 */
	top: 39%; /* 距離上方 50% */
	left: 50%; /* 距離左 50% */
	animation: tszou 1s steps(8) infinite; /* ts 動畫 */
}
@keyframes tszou { /* ts 走路動畫 */
	to {
		background-position: -1360px 0; /* 播放 8 格 */
	}
}
.ss { /* 角色 ss */
	z-index: 999; /* 最上層 */
	width: 210px; /* 寬度 */
	height: 260px; /* 高度 https://1.bp.blogspot.com/-EWhm-OqVkf0/W0LV2U_jbNI/AAAAAAAACYE/RcY158W0Euk9B-EDrg0pUY2saLxZAcd8QCLcBGAs/s3200/6.png*/
	background: url("https://snoweryi.github.io/kid/course/img/j/4.png") 0 0 no-repeat; /* ss 角色 sprite 圖 */
	/*margin: 400px auto;*/ /*（註解）未使用 */
	position: absolute; /* 絕對定位 */
	top: 44%; /* 距離上方 57% */
	left: 62%; /* 距離左側 62% */
	animation: sszou 1s steps(8) infinite; /* ss 動畫 */
}
@keyframes sszou { /* ss 的走路動畫 */
	to {
		background-position: -1680px 0; /* 完成 8 格動畫 */
	}
}

@media (max-width: 768px) {
	.wk {
		top: 60%;
		left: 0%;
	}
	.bj {
		top: 60%;
		left: 20%;		
	}
	.ts {		
		top: 52%;
		left: 40%;
	}
	.ss {		
		top: 60%;
		left: 70%;
	}
}