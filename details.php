<!DOCTYPE html>

<html>

<head itemprop="video" itemscope="" itemtype="//schema.org/VideoObject">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="renderer" content="webkit">
    <meta name="force-rendering" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="referrer" content="always">

    <title>详细页</title>
    <?php require './parts/head.php'; ?>


    <link href="./details_files/videoland.415a47.css" rel="stylesheet">
    <style>
    /* html, body {
	position: relative;
	width: 100%;
	height: 100%;
}

body {
	color: #333;
	margin: 0;
	padding: 8px;
	box-sizing: border-box;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
} */

    .mediago-ad-wrapper a {
        color: rgb(0, 100, 200);
        text-decoration: none;
    }

    .mediago-ad-wrapper a:hover {
        text-decoration: underline;
    }

    .mediago-ad-wrapper a:visited {
        color: rgb(0, 80, 160);
    }

    .mediago-ad-wrapper label {
        display: block;
    }

    .mediago-ad-wrapper input,
    .mediago-ad-wrapper button,
    .mediago-ad-wrapper select,
    .mediago-ad-wrapper textarea {
        font-family: inherit;
        font-size: inherit;
        -webkit-padding: 0.4em 0;
        padding: 0.4em;
        margin: 0 0 0.5em 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 2px;
    }

    .mediago-ad-wrapper input:disabled {
        color: #ccc;
    }

    .mediago-ad-wrapper button {
        color: #333;
        background-color: #f4f4f4;
        outline: none;
    }

    .mediago-ad-wrapper button:disabled {
        color: #999;
    }

    .mediago-ad-wrapper button:not(:disabled):active {
        background-color: #ddd;
    }

    .mediago-ad-wrapper button:focus {
        border-color: #666;
    }
    </style>
    <style>
    #mediago-main.svelte-nre185 {
        text-align: center;
        padding: 1em;
        max-width: 240px;
        margin: 0 auto
    }

    @media(min-width: 640px) {
        #mediago-main.svelte-nre185 {
            max-width: none
        }
    }
    </style>
    <style type="text/css">
    .art-undercover {
        position: fixed;
        display: none;
        opacity: .9;
        z-index: 10
    }

    .art-undercover,
    .error-wrap {
        background: #000;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%
    }

    .error-wrap {
        position: absolute;
        z-index: 33;
        color: #fff;
        text-align: center;
        line-height: 200px
    }

    .error-wrap a {
        text-decoration: underline
    }

    @-webkit-keyframes biggerAni {
        0% {
            transform: scale(1);
            opacity: .8
        }

        50% {
            transform: scale(1.2);
            opacity: 1
        }

        to {
            transform: scale(1);
            opacity: 1
        }
    }

    @keyframes biggerAni {
        0% {
            transform: scale(1);
            opacity: .8
        }

        50% {
            transform: scale(1.2);
            opacity: 1
        }

        to {
            transform: scale(1);
            opacity: 1
        }
    }

    .biggerAnimation {
        -webkit-animation: biggerAni .5s;
        animation: biggerAni .5s
    }

    .currentTime,
    .durationTime {
        color: #fff;
        font-weight: 600
    }

    .durationTime {
        opacity: .6
    }

    .art-video-player {
        display: flex;
        position: relative;
        margin: 0 auto;
        z-index: 20;
        max-width: 100%;
        width: 100%;
        height: 0;
        padding-top: 56.25%;
        outline: 0;
        zoom: 1;
        font-family: Roboto, Arial, Helvetica, sans-serif;
        color: #eee;
        background-color: #000;
        text-align: left;
        direction: ltr;
        font-size: 14px;
        line-height: 1.3;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        touch-action: manipulation;
        -ms-high-contrast-adjust: none
    }

    .art-video-player * {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    .art-video-player ::-webkit-scrollbar {
        width: 5px
    }

    .art-video-player ::-webkit-scrollbar-thumb {
        background-color: #666
    }

    .art-video-player ::-webkit-scrollbar-thumb:hover {
        background-color: #ccc
    }

    .art-video-player .art-icon {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        line-height: 1.5
    }

    .art-video-player .art-icon svg {
        fill: #fff
    }

    .art-video-player img {
        max-width: 100%;
        vertical-align: top
    }

    @supports ((-webkit-backdrop-filter:initial) or (backdrop-filter:initial)) {
        .art-video-player .art-backdrop-filter {
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            backdrop-filter: saturate(180%) blur(20px)
        }
    }

    .art-control-miniSwitch {
        position: relative;
        padding: 4px
    }

    .art-control-miniSwitch .mini-wrap-hack {
        position: absolute;
        display: none;
        bottom: 30px;
        left: 50%;
        margin-left: -78px;
        width: 155px;
        height: 82px;
        padding-bottom: 10px;
        border-radius: 8px;
        z-index: 30
    }

    .art-control-miniSwitch .mini-wrap {
        width: 155px;
        height: 62px;
        background: rgba(17, 17, 17, .7);
        border-radius: 8px;
        z-index: 30
    }

    .art-control-miniSwitch .mini-wrap p {
        float: left;
        color: #fff;
        font-size: 14px;
        line-height: 62px;
        margin-left: 16px
    }

    .art-control-miniSwitch .mini-wrap .switch-wrap {
        margin-top: 22px;
        margin-left: 7px;
        float: left;
        position: relative;
        width: 32px;
        height: 18px;
        border: 1px solid hsla(0, 0%, 100%, .8);
        border-radius: 11px;
        outline: none;
        box-sizing: border-box;
        cursor: pointer;
        transition: border-color .3s, background-color .3s;
        vertical-align: middle
    }

    .art-control-miniSwitch .mini-wrap .switch-wrap span {
        position: absolute;
        top: 1px;
        left: 1px;
        transition: transform .3s;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background-color: #fff
    }

    .art-control-miniSwitch .mini-wrap .switch-wrap.active {
        border-color: #ff4141
    }

    .art-control-miniSwitch .mini-wrap .switch-wrap.active span {
        transform: translateX(14px);
        background-color: #ff4141
    }

    .art-control-miniSwitch .mini-wrap:after {
        content: "";
        display: block;
        position: absolute;
        bottom: 6px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border: 7px solid transparent;
        border-top-color: rgba(17, 17, 17, .7)
    }

    .art-control-miniSwitch:hover .mini-wrap-hack {
        display: block
    }

    .mini-replay {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: rgba(0, 0, 0, .54);
        display: none;
        z-index: 100
    }

    .mini-replay .mini-replay-svg {
        border-radius: 100%;
        cursor: pointer;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -24px;
        margin-top: -24px
    }

    .art-controls-right .art-control {
        opacity: .8
    }

    .art-controls-right .art-control:hover {
        opacity: 1
    }

    .art-controls-right .art-control-playrate,
    .art-controls-right .art-control-quality {
        opacity: .9
    }

    .art-controls-right .art-control-playrate:hover,
    .art-controls-right .art-control-quality:hover {
        opacity: 1
    }

    .art-control-next {
        margin-right: 10px
    }

    .art-control-next svg {
        position: absolute;
        top: 6px;
        left: 8px
    }

    .art-mini-icon {
        position: absolute;
        left: 50%;
        top: 50%;
        display: none
    }

    .art-animation-volume {
        height: 100%;
        padding: 5px
    }

    .art-close-automini {
        color: #fff;
        height: 35px;
        line-height: 35px;
        cursor: pointer
    }

    .art-close-automini .empty-circle {
        width: 11px;
        height: 11px;
        background: transparent;
        border-radius: 50%;
        border: 1px solid #fff;
        float: left;
        margin-top: 11px;
        opacity: .8
    }

    .art-close-automini .close-text {
        float: left;
        margin-left: 5px;
        margin-right: 10px;
        opacity: .8
    }

    .art-close-automini .close-tip-text {
        display: none;
        background: rgba(17, 17, 17, .7);
        border-radius: 8px;
        color: #fff;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        position: absolute;
        bottom: -38px;
        right: 10px;
        padding: 0 8px
    }

    .art-close-automini:hover .close-text,
    .art-close-automini:hover .empty-circle {
        opacity: 1
    }

    .art-close-automini:hover .close-tip-text {
        display: block
    }

    .art-control svg {
        max-width: 34px
    }

    .art-control.art-control-playAndPause {
        margin-left: 5px
    }

    .art-control.art-control-playAndPause svg {
        max-width: 44px
    }

    .hkplayer-is-cssfullscreen {
        position: fixed !important;
        left: 0 !important;
        top: 0 !important;
        width: 100% !important;
        height: 100% !important;
        z-index: 99999 !important;
        padding-top: 0 !important
    }

    .art-video-player .art-video {
        z-index: 10;
        background-color: #000;
        cursor: pointer
    }

    .art-video-player .art-poster,
    .art-video-player .art-video {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%
    }

    .art-video-player .art-poster {
        z-index: 11;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        pointer-events: none
    }

    .art-video-player .art-subtitle {
        display: none;
        position: absolute;
        z-index: 20;
        bottom: 10px;
        width: 100%;
        padding: 0 20px;
        text-align: center;
        color: #fff;
        font-size: 20px;
        pointer-events: none;
        text-shadow: .5px .5px .5px rgba(0, 0, 0, .5)
    }

    .art-video-player .art-subtitle p {
        word-break: break-all;
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content;
        margin: 5px 0 0;
        line-height: 1.2
    }

    .art-video-player .art-bilingual p:nth-child(n+2) {
        transform: scale(.6);
        transform-origin: center top
    }

    .art-video-player.art-subtitle-show .art-subtitle {
        display: block
    }

    .art-video-player.art-control-show .art-subtitle {
        bottom: 50px
    }

    .art-video-player .art-danmuku {
        z-index: 30
    }

    .art-video-player .art-danmuku,
    .art-video-player .art-layers {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none
    }

    .art-video-player .art-layers {
        display: none;
        z-index: 40
    }

    .art-video-player .art-layers .art-layer {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 5%
    }

    .art-video-player.art-layer-show .art-layers {
        display: block
    }

    .art-video-player .art-mask {
        display: none;
        align-items: center;
        justify-content: center;
        position: absolute;
        z-index: 50;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none
    }

    .art-video-player .art-mask .art-state {
        width: 88px;
        height: 88px;
        overflow: hidden;
        text-align: center;
        vertical-align: middle;
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 115;
        margin-top: -44px;
        margin-left: -44px;
        cursor: pointer
    }

    .art-video-player.art-mask-show .art-mask {
        display: flex
    }

    .art-video-player .art-loading {
        display: none;
        position: absolute;
        z-index: 70;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
        pointer-events: none
    }

    .art-video-player.art-loading-show .art-loading {
        display: flex;
        width: 60px;
        height: 60px;
        left: 50%;
        top: 50%;
        margin-left: -30px;
        margin-top: -30px
    }

    .art-video-player .art-bottom {
        position: absolute;
        z-index: 60;
        left: 0;
        right: 0;
        bottom: 0;
        height: 76px;
        opacity: 0;
        visibility: hidden;
        transition: all .2s ease-in-out;
        pointer-events: none;
        background: linear-gradient(180deg, transparent, rgba(0, 0, 0, .5))
    }

    .art-video-player .art-bottom .art-progress {
        position: relative;
        pointer-events: auto;
        z-index: 2
    }

    .art-video-player .art-bottom .art-progress .art-control-progress {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        height: 24px;
        padding-top: 8px;
        padding-bottom: 8px;
        cursor: pointer
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner {
        position: relative;
        height: 50%;
        width: 100%;
        background: hsla(0, 0%, 100%, .2)
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-loaded {
        position: absolute;
        z-index: 10;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 0;
        background: hsla(0, 0%, 100%, .4);
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-played {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        position: absolute;
        z-index: 20;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 0
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-highlight {
        position: absolute;
        z-index: 30;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        pointer-events: none
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-highlight span {
        display: inline-block;
        position: absolute;
        left: 0;
        top: 0;
        width: 7px;
        height: 100%;
        background: #fff;
        pointer-events: auto
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-indicator {
        display: none;
        position: absolute;
        z-index: 40;
        top: -5px;
        left: -6.5px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #fff !important
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-indicator.art-show-indicator {
        display: block
    }

    .art-video-player .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-tip {
        display: none;
        position: absolute;
        z-index: 50;
        top: -25px;
        left: 0;
        height: 20px;
        padding: 0 5px;
        line-height: 20px;
        color: #fff;
        font-size: 12px;
        text-align: center;
        background: rgba(0, 0, 0, .7);
        border-radius: 3px;
        font-weight: 700;
        white-space: nowrap
    }

    .art-video-player .art-bottom .art-progress .art-control-progress:hover .art-control-progress-inner {
        height: 100%
    }

    .art-video-player .art-bottom .art-progress .art-control-progress:hover .art-control-progress-inner .art-progress-indicator,
    .art-video-player .art-bottom .art-progress .art-control-progress:hover .art-control-progress-inner .art-progress-tip {
        display: block
    }

    .art-video-player .art-bottom .art-progress .art-control-thumbnails {
        display: none;
        position: absolute;
        bottom: 8px;
        left: 0;
        pointer-events: none;
        background-color: rgba(0, 0, 0, .7)
    }

    .art-video-player .art-bottom .art-progress .art-control-loop {
        display: none;
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        pointer-events: none
    }

    .art-video-player .art-bottom .art-progress .art-control-loop .art-loop-point {
        position: absolute;
        left: 0;
        top: -2px;
        width: 2px;
        height: 8px;
        background: hsla(0, 0%, 100%, .75)
    }

    .art-video-player .art-bottom .art-controls {
        position: relative;
        pointer-events: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 40px;
        padding: 0\0;
        margin-top: 6px
    }

    .art-video-player .art-bottom .art-controls .art-controls-left {
        display: flex;
        float: left\0
    }

    .art-video-player .art-bottom .art-controls .art-controls-left .art-control {
        float: left\0
    }

    .art-video-player .art-bottom .art-controls .art-controls-right {
        display: flex;
        float: right\0;
        margin-right: 2px
    }

    .art-video-player .art-bottom .art-controls .art-controls-right .art-control {
        margin-right: 10px;
        float: left\0
    }

    .art-video-player .art-bottom .art-controls .art-controls-right .art-control .art-icon-fullscreen.ie9hack {
        margin-right: 10px;
        margin-top: 8px
    }

    .art-video-player .art-bottom .art-controls .art-controls-right .art-control-playrate,
    .art-video-player .art-bottom .art-controls .art-controls-right .art-control-quality {
        margin-right: 5px
    }

    .art-video-player .art-bottom .art-controls .art-control {
        font-size: 12px;
        height: 40px;
        min-width: 44px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        white-space: nowrap
    }

    .art-video-player .art-bottom .art-controls .art-control .art-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        float: left;
        height: 40px;
        width: 44px
    }

    .art-video-player .art-bottom .art-controls .art-control .art-icon-volumeClose {
        padding: 8px\0
    }

    .art-video-player .art-bottom .art-controls .art-control-time {
        font-size: 14px
    }

    .art-video-player .art-bottom .art-controls .playnext-icon {
        margin-top: 6px
    }

    .art-video-player .art-bottom .art-controls .art-control-control10,
    .art-video-player .art-bottom .art-controls .art-control-control11 {
        display: flex;
        align-items: center;
        justify-content: center;
        float: left;
        height: 40px;
        width: 44px
    }

    .art-video-player .art-bottom .art-controls .art-control-playrate,
    .art-video-player .art-bottom .art-controls .art-control-quality,
    .art-video-player .art-bottom .art-controls .art-control-screenshot {
        margin-right: 5px
    }

    .art-video-player .art-bottom .art-controls .art-control-onlyText {
        padding: 0 10px
    }

    .art-video-player .art-bottom .art-controls .art-control-volume {
        z-index: 99
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-hover-area {
        position: absolute;
        bottom: 30px;
        width: 44px;
        height: 154px;
        z-index: 21;
        display: none
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap {
        position: absolute;
        width: 44px;
        height: 134px;
        clear: both;
        background: rgba(17, 17, 17, .7);
        border-radius: 8px
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap span {
        float: left;
        width: 100%;
        height: 30px;
        line-height: 30px;
        display: block
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap:after {
        content: "";
        display: block;
        position: absolute;
        bottom: -16px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border: 8px solid transparent;
        border-top-color: rgba(17, 17, 17, .7)
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap .art-volume-panel {
        position: relative;
        float: left;
        width: 44px;
        height: 91px;
        transition: margin .2s cubic-bezier(.4, 0, 1, 1), width .2s cubic-bezier(.4, 0, 1, 1);
        overflow: hidden;
        margin: 0 auto
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap .art-volume-panel .art-volume-slider-handle {
        position: absolute;
        left: 50%;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        margin-top: 0;
        background: #fff;
        margin-left: -6px;
        z-index: 2
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap .art-volume-panel .art-volume-top-bottom {
        width: 3px;
        height: 90px;
        left: 50%;
        position: absolute;
        margin-left: -1px;
        z-index: 1;
        border-radius: 8px;
        background: #fff
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap .art-volume-panel .art-volume-bottom,
    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap .art-volume-panel .art-volume-top {
        position: absolute;
        display: block;
        height: 90px;
        width: 3px;
        left: 50%;
        margin-left: -2px
    }

    .art-video-player .art-bottom .art-controls .art-control-volume .art-volume-panel-wrap .art-volume-panel .art-volume-top {
        bottom: -64px;
        background: rgba(0, 0, 0, .4)
    }

    .art-video-player .art-bottom .art-controls .art-control-volume:hover .art-volume-hover-area {
        display: block
    }

    .art-video-player .art-bottom .art-controls .art-control-quality {
        position: relative;
        z-index: 30
    }

    .art-video-player .art-bottom .art-controls .art-control-quality .art-qualitys {
        display: none;
        position: absolute;
        bottom: 35px;
        width: 100px;
        padding: 5px 0;
        text-align: center;
        color: #fff;
        background: rgba(0, 0, 0, .8);
        border-radius: 3px
    }

    .art-video-player .art-bottom .art-controls .art-control-quality .art-qualitys .art-quality-item {
        height: 30px;
        line-height: 30px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-shadow: 0 0 2px rgba(0, 0, 0, .5)
    }

    .art-video-player .art-bottom .art-controls .art-control-quality .art-qualitys .art-quality-item:hover {
        background-color: hsla(0, 0%, 100%, .1)
    }

    .art-video-player .art-bottom .art-controls .art-control-quality:hover .art-qualitys {
        display: block
    }

    .art-video-player.art-control-show .art-bottom,
    .art-video-player.art-hover .art-bottom {
        opacity: 1;
        visibility: visible
    }

    .art-video-player.art-destroy .art-progress-indicator,
    .art-video-player.art-destroy .art-progress-tip,
    .art-video-player.art-error .art-progress-indicator,
    .art-video-player.art-error .art-progress-tip {
        display: none !important
    }

    .art-video-player .art-notice {
        display: none;
        font-size: 14px;
        position: absolute;
        z-index: 80;
        left: 0;
        top: 0;
        padding: 10px;
        width: 100%;
        pointer-events: none
    }

    .art-video-player .art-notice .art-notice-inner {
        display: none;
        padding: 5px 10px;
        color: #fff;
        background: rgba(0, 0, 0, .6);
        border-radius: 3px
    }

    .art-video-player.art-notice-show .art-notice {
        display: flex
    }

    .art-video-player .art-contextmenus {
        display: none;
        flex-direction: column;
        position: absolute;
        z-index: 120;
        left: 0;
        top: 0;
        min-width: 160px;
        background-color: rgba(26, 26, 26, .96);
        border-radius: 5px
    }

    .art-video-player .art-contextmenus .art-contextmenu {
        cursor: pointer;
        font-size: 14px;
        display: block;
        color: #fff;
        padding: 15px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        opacity: .8
    }

    .art-video-player .art-contextmenus .art-contextmenu:hover {
        opacity: 1
    }

    .art-video-player.art-contextmenu-show .art-contextmenus {
        display: flex
    }

    .art-video-player .art-settings {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        z-index: 90;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        overflow: hidden
    }

    .art-video-player .art-settings .art-setting-inner {
        position: absolute;
        top: 0;
        right: -300px;
        bottom: 0;
        width: 300px;
        height: 100%;
        font-size: 12px;
        background: rgba(0, 0, 0, .9);
        transition: all .2s ease-in-out;
        overflow: auto
    }

    .art-video-player .art-settings .art-setting-inner .art-setting-body {
        overflow-y: auto;
        width: 100%;
        height: 100%
    }

    .art-video-player .art-settings .art-setting-inner .art-setting-body .art-setting {
        border-bottom: 1px solid hsla(0, 0%, 100%, .1);
        padding: 10px 15px
    }

    .art-video-player .art-settings .art-setting-inner .art-setting-body .art-setting .art-setting-header {
        margin-bottom: 5px
    }

    .art-video-player .art-settings .art-setting-radio {
        display: flex
    }

    .art-video-player .art-settings .art-setting-radio .art-radio-item {
        flex: 1;
        padding: 0 2px
    }

    .art-video-player .art-settings .art-setting-radio .art-radio-item button {
        height: 22px;
        width: 100%;
        border: none;
        outline: none;
        color: #fff;
        background: hsla(0, 0%, 100%, .2);
        border-radius: 2px
    }

    .art-video-player .art-settings .art-setting-radio .art-radio-item.current button,
    .art-video-player .art-settings .art-setting-radio .art-radio-item button:active {
        background-color: #00a1d6
    }

    .art-video-player .art-settings .art-setting-range input {
        width: 100%;
        height: 3px;
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: hsla(0, 0%, 100%, .5)
    }

    .art-video-player .art-settings .art-setting-checkbox {
        display: flex;
        align-items: center
    }

    .art-video-player .art-settings .art-setting-checkbox input {
        height: 14px;
        width: 14px;
        margin-right: 5px
    }

    .art-video-player .art-settings .art-setting-upload {
        display: flex
    }

    .art-video-player .art-settings .art-setting-upload .art-upload-btn {
        width: 80px;
        height: 22px;
        line-height: 22px;
        border: none;
        outline: none;
        color: #fff;
        background: hsla(0, 0%, 100%, .2);
        border-radius: 2px;
        text-align: center
    }

    .art-video-player .art-settings .art-setting-upload .art-upload-value {
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        height: 22px;
        line-height: 22px;
        padding-left: 10px
    }

    .art-video-player.art-setting-show .art-settings {
        opacity: 1;
        visibility: visible;
        pointer-events: auto
    }

    .art-video-player.art-setting-show .art-settings .art-setting-inner {
        right: 0
    }

    .art-video-player .art-info {
        display: none;
        flex-direction: column;
        position: absolute;
        left: 10px;
        top: 10px;
        z-index: 100;
        width: 360px;
        padding: 20px 20px 25px;
        border-radius: 5px;
        color: #fff;
        font-size: 12px;
        font-family: Noto Sans CJK SC DemiLight, Roboto, Segoe UI, Tahoma, Arial, Helvetica, sans-serif;
        -webkit-font-smoothing: antialiased;
        background-color: rgba(26, 26, 26, .96)
    }

    .art-video-player .art-info .art-info-title {
        margin-left: 10px;
        margin-bottom: 12px;
        font-size: 16px;
        color: #fff
    }

    .art-video-player .art-info .hkvideo-ctxmenuhelp-list {
        font-size: 14px
    }

    .art-video-player .art-info .hkvideo-ctxmenuhelp-list .hkvideo-ctxmenuhelp-item {
        padding: 0 15px;
        height: 32px;
        width: 50%;
        line-height: 32px;
        display: inline-block;
        border-radius: 14px;
        margin-bottom: 2px;
        color: #999;
        cursor: pointer;
        float: left
    }

    .art-video-player .art-info .hkvideo-ctxmenuhelp-list .hkvideo-ctxmenuhelp-item .menuhelp-label {
        color: #fff
    }

    .art-video-player .art-info .art-info-item {
        display: flex;
        margin-bottom: 5px
    }

    .art-video-player .art-info .art-info-item .art-info-title {
        width: 100px;
        text-align: right
    }

    .art-video-player .art-info .art-info-item .art-info-content {
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding-left: 5px
    }

    .art-video-player .art-info .art-info-item:last-child {
        margin-bottom: 0
    }

    .art-video-player .art-info .art-info-close {
        position: absolute;
        top: 8px;
        right: 8px;
        cursor: pointer
    }

    .art-video-player .art-info .art-info-close .hkplayer-close {
        fill: #fff;
        cursor: pointer
    }

    .art-video-player.art-info-show .art-info {
        display: flex
    }

    .art-video-player.art-hide-cursor * {
        cursor: none !important
    }

    .art-video-player[data-aspect-ratio] video {
        box-sizing: content-box;
        -o-object-fit: fill;
        object-fit: fill
    }

    .art-video-player.art-fullscreen-web {
        position: fixed;
        z-index: 9999;
        width: 100% !important;
        height: 100% !important;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        padding-top: 0 !important
    }

    .art-fullscreen-rotate {
        position: fixed;
        z-index: 9999;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: #000
    }

    .art-video-player .art-mini-header {
        display: none;
        position: absolute;
        z-index: 110;
        left: 0;
        top: 0;
        right: 0;
        height: 35px;
        line-height: 35px;
        color: #fff;
        background: linear-gradient(180deg, rgba(0, 0, 0, .6), transparent);
        align-items: center;
        justify-content: space-between;
        opacity: 0;
        visibility: hidden;
        transition: all .2s ease-in-out
    }

    .art-video-player .art-mini-header .art-mini-title {
        flex: 1;
        padding: 0 10px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: move
    }

    .art-video-player .art-mini-header .art-mini-close {
        width: 35px;
        height: 35px;
        text-align: center;
        font-size: 22px;
        cursor: pointer;
        padding: 3px
    }

    .art-video-player .art-mini-header .art-mini-close svg {
        opacity: .8
    }

    .art-video-player .art-mini-header .art-mini-close svg:hover {
        opacity: 1
    }

    .art-video-player.art-is-dragging {
        opacity: .7
    }

    .art-video-player.art-mini {
        position: fixed;
        z-index: 9999;
        width: 400px;
        height: 225px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 3px 6px 0 rgba(0, 0, 0, .2);
        padding-top: 0 !important
    }

    .art-video-player.art-mini .art-icon-state {
        display: block
    }

    .art-video-player.art-mini .hkplayer-close {
        fill: #fff
    }

    .art-video-player.art-mini .art-mini-header {
        display: flex;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .art-video-player.art-mini.art-hover .art-mini-header {
        opacity: 1;
        visibility: visible
    }

    .art-video-player.art-mini .art-mask .art-state {
        display: inline-block;
        position: static;
        position: absolute;
        left: 50%;
        top: 50%;
        width: 50px;
        height: 50px;
        margin: -25px auto auto -25px
    }

    .art-video-player.art-mini .art-mask .art-state .art-icon-state {
        transform: scale(.4);
        width: 88px;
        height: 88px;
        overflow: hidden;
        margin-left: -19px;
        margin-top: -19px
    }

    .art-video-player.art-mini .art-contextmenu,
    .art-video-player.art-mini .art-danmu,
    .art-video-player.art-mini .art-info,
    .art-video-player.art-mini .art-notice,
    .art-video-player.art-mini .art-setting,
    .art-video-player.art-mini .art-subtitle {
        display: none
    }

    .art-video-player.art-mini .art-bottom .art-progress {
        display: block;
        position: absolute;
        bottom: -2px;
        width: 100%
    }

    .art-video-player.art-mini .art-bottom .art-progress .art-control-progress {
        height: 8px;
        padding-top: 0;
        padding-bottom: 0
    }

    .art-video-player.art-mini .art-bottom .art-progress .art-control-progress:hover .art-control-progress-inner {
        height: 50%
    }

    .art-video-player.art-mini .art-bottom .art-progress .art-control-progress .art-progress-indicator {
        top: -8px
    }

    .art-video-player.art-mini .art-control-time {
        position: absolute;
        bottom: 2px;
        left: 6px;
        padding: 0;
        line-height: 24px;
        height: 24px
    }

    .art-video-player.art-mini .art-controls .art-control-next,
    .art-video-player.art-mini .art-controls .art-control-playAndPause,
    .art-video-player.art-mini .art-controls .art-control-volume,
    .art-video-player.art-mini .art-controls .art-controls-right {
        display: none
    }

    .art-video-player.art-mini .art-bottom {
        height: auto;
        background: none
    }

    .art-video-player .art-icon-state {
        display: none
    }

    .art-video-player .art-mini-mask {
        display: none;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, .2);
        z-index: 100
    }

    .art-video-player.art-mini.art-hover .art-mini-mask {
        display: flex
    }

    .art-video-player[data-flip=horizontal] .art-video {
        transform: scaleX(-1)
    }

    .art-video-player[data-flip=vertical] .art-video {
        transform: scaleY(-1)
    }

    .art-video-player .art-layers .art-layer-log {
        display: none;
        position: absolute;
        left: 10px;
        bottom: 10px;
        width: 120px;
        color: #fff;
        text-shadow: 0 0 2px rgba(0, 0, 0, .5);
        background-color: rgba(0, 0, 0, .5);
        border-radius: 3px;
        padding: 5px;
        font-size: 13px;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .art-video-player .art-layers .art-layer-log p {
        margin-bottom: 0;
        word-break: break-all
    }

    .art-video-player .art-control-selector {
        position: relative
    }

    .art-video-player .art-control-selector .art-selector-list-wrap {
        display: none;
        position: absolute;
        z-index: 200;
        padding-bottom: 32px;
        left: 50%;
        top: 9px;
        transform: translate(-50%, -100%)
    }

    .art-video-player .art-control-selector .art-selector-value {
        text-align: center;
        font-family: PingFangSC-Medium;
        font-size: 16px;
        color: hsla(0, 0%, 100%, .8);
        letter-spacing: 0;
        line-height: 40px;
        font-weight: 500;
        cursor: pointer;
        width: 60px;
        height: 40px;
        border-radius: 3px;
        display: inline-block;
        vertical-align: middle
    }

    .art-video-player .art-control-selector .art-selector-value:hover {
        color: #fff
    }

    .art-video-player .art-control-selector .art-selector-list {
        padding: 10px 15px;
        text-align: center;
        color: #fff;
        background: rgba(17, 17, 17, .7);
        border-radius: 8px
    }

    .art-video-player .art-control-selector .art-selector-list:after {
        content: "";
        display: block;
        position: absolute;
        bottom: 18px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border: 7px solid transparent;
        border-top-color: rgba(17, 17, 17, .7)
    }

    .art-video-player .art-control-selector .art-selector-list .art-selector-item {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding-left: 29px;
        padding-right: 26px;
        min-width: 99px;
        position: relative;
        height: 34px;
        line-height: 34px;
        margin-top: 7px;
        border-radius: 17px;
        font-weight: 400;
        font-size: 14px;
        opacity: .8
    }

    .art-video-player .art-control-selector .art-selector-list .art-selector-item:hover {
        background-color: hsla(0, 0%, 100%, .1)
    }

    .art-video-player .art-control-selector .art-selector-list .art-selector-item svg {
        display: none;
        position: absolute;
        left: 10px;
        top: 10px
    }

    .art-video-player .art-control-selector .art-selector-list .art-selector-item-active {
        color: #fff;
        background: hsla(0, 0%, 100%, .15);
        font-size: 16px;
        font-weight: 600;
        opacity: 1
    }

    .art-video-player .art-control-selector .art-selector-list .art-selector-item-active svg,
    .art-video-player .art-control-selector:hover .art-selector-list-wrap {
        display: block
    }

    .art-video-player .art-control-quality .art-selector-dash {
        width: 160px
    }

    :root {
        --balloon-color: rgba(0, 0, 0, 0.8);
        --balloon-font-size: 12px;
        --balloon-move: 4px
    }

    button[aria-label][data-balloon-pos] {
        overflow: visible
    }

    [aria-label][data-balloon-pos] {
        position: relative;
        cursor: pointer
    }

    [aria-label][data-balloon-pos]:after {
        text-indent: 0;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif;
        font-weight: 400;
        font-style: normal;
        text-shadow: none;
        font-size: 12px;
        background: rgba(17, 17, 17, .7);
        border-radius: 8px;
        color: #fff;
        content: attr(aria-label);
        padding: .5em 1em;
        white-space: nowrap;
        line-height: 1.2
    }

    [aria-label][data-balloon-pos]:after,
    [aria-label][data-balloon-pos]:before {
        opacity: 0;
        pointer-events: none;
        transition: all .18s ease-out .18s;
        position: absolute;
        z-index: 10
    }

    [aria-label][data-balloon-pos]:before {
        width: 0;
        height: 0;
        content: ""
    }

    [aria-label][data-balloon-pos]:hover:after,
    [aria-label][data-balloon-pos]:hover:before {
        opacity: 1;
        pointer-events: none
    }

    [aria-label][data-balloon-pos][data-balloon-pos=up]:after {
        margin-bottom: 10px
    }

    [aria-label][data-balloon-pos][data-balloon-pos=up]:after,
    [aria-label][data-balloon-pos][data-balloon-pos=up]:before {
        bottom: 100%;
        left: 50%;
        transform: translate(-50%, 4px);
        transform-origin: top
    }

    [aria-label][data-balloon-pos][data-balloon-pos=up]:hover:after,
    [aria-label][data-balloon-pos][data-balloon-pos=up]:hover:before {
        transform: translate(-50%)
    }

    .small-control .art-bottom {
        height: 39px
    }

    .small-control .art-bottom .art-progress .art-control-progress {
        height: 6px;
        padding-top: 1px;
        padding-bottom: 1px
    }

    .small-control .art-bottom .art-progress .art-control-progress .art-control-progress-inner .art-progress-indicator {
        width: 14px;
        height: 14px
    }

    .small-control .art-bottom .art-controls {
        margin-top: 0;
        height: auto
    }

    .small-control .art-bottom .art-controls .art-control {
        height: 33px;
        line-height: 33px;
        min-width: 37px
    }

    .small-control .art-bottom .art-controls .art-controls-left .art-control-time {
        font-size: 12px;
        margin-left: 5px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control,
    .small-control .art-bottom .art-controls .art-controls-right .art-control-playrate {
        margin-right: 0
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-selector .art-selector-value {
        font-size: 14px;
        height: 33px;
        line-height: 33px;
        width: 40px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-selector .art-selector-value:hover {
        color: #fff
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-selector .art-selector-list-wrap {
        top: 4px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-selector .art-selector-list-wrap .art-selector-list {
        padding: 8px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-selector .art-selector-list-wrap .art-selector-list .art-selector-item {
        height: 26px;
        line-height: 26px;
        min-width: 89px;
        margin-top: 4px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-selector .art-selector-list-wrap .art-selector-list .art-selector-item svg {
        left: 12px;
        top: 7px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-selector .art-selector-list-wrap .art-selector-list .art-selector-item:first-child {
        margin-top: 0
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-fullscreen .art-icon {
        width: 20px;
        height: 16px;
        margin-left: 6px;
        margin-top: 8px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-volume {
        position: relative
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-volume .art-animation-volume {
        padding: 4px 4.5px 5px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-volume .art-volume-hover-area {
        width: 40px;
        bottom: 24px;
        left: -1px;
        height: 121px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-volume .art-volume-hover-area .art-volume-panel-wrap {
        width: 40px;
        height: 109px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-volume .art-volume-hover-area .art-volume-panel-wrap .art-volume-panel {
        width: 40px;
        height: 71px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-volume .art-volume-hover-area .art-volume-panel-wrap .art-volume-panel .art-volume-top-bottom,
    .small-control .art-bottom .art-controls .art-controls-right .art-control-volume .art-volume-hover-area .art-volume-panel-wrap .art-volume-panel .art-volume-top-bottom .art-volume-top {
        height: 70px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-icon-volumeClose {
        width: 37px;
        height: 33px;
        padding: 8px 8.5px 9px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-miniSwitch .mini-wrap-hack {
        bottom: 20px;
        height: 62px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-miniSwitch .mini-wrap-hack .mini-wrap {
        height: 42px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-miniSwitch .mini-wrap-hack .mini-wrap p {
        line-height: 42px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-miniSwitch .mini-wrap-hack .mini-wrap .switch-wrap {
        margin-top: 12px
    }

    .small-control .art-bottom .art-controls .art-controls-right .art-control-pip i {
        width: 20px;
        height: 16px;
        margin-left: 6px;
        margin-top: 8px
    }
    </style>

    <style>
    .mediago-ad-haokan-rightrail-wrapper.svelte-xtgbqj.svelte-xtgbqj {
        position: relative;
        text-align: center;
        width: 100%;
        height: 100%
    }

    .mediago-ad-haokan-rightrail-wrapper.svelte-xtgbqj .mediago-a-tag.svelte-xtgbqj {
        display: block;
        width: 100%;
        height: 100%
    }

    .mediago-ad-haokan-rightrail-wrapper.svelte-xtgbqj .mediago-img.svelte-xtgbqj {
        position: relative;
        width: 100%;
        height: 100%;
        background: no-repeat center
    }

    .mediago-ad-haokan-rightrail-wrapper.svelte-xtgbqj .mediago-ad-logo.svelte-xtgbqj {
        position: absolute;
        top: 8px;
        right: 8px;
        width: 40px;
        height: 18px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 3px
    }

    .mediago-ad-haokan-rightrail-wrapper.svelte-xtgbqj .mediago-ad-logo .mediago-text.svelte-xtgbqj {
        display: inline-block;
        font-size: 12px;
        -webkit-transform: scale(0.8333333333);
        -ms-transform: scale(0.8333333333);
        transform: scale(0.8333333333);
        color: #ffffff;
        letter-spacing: 0;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        word-break: break-all;
        line-height: 19px
    }
    </style>
</head>

<body>

    <div id="rooot">
        <header class="header">
            <div class="flex-inner fluid">
                <div class="header-content layout clear">
                    <div class="header-logo float-left"><a href="https://haokan.baidu.com/"
                            class="header-logo-icon"></a></div>
                    <div class="header-channel float-left clear">
                        <div class="float-left fluid-item slite-1"><a href="https://haokan.baidu.com/tab/recommend"
                                class="fluid-item-link">推荐</a></div>
                        <div class="float-left fluid-item slite-2"><a
                                href="https://haokan.baidu.com/tab/projection_hall" class="fluid-item-link">放映厅</a>
                        </div>
                        <div class="float-left fluid-item slite-3"><a href="https://haokan.baidu.com/tab/yingshi"
                                class="fluid-item-link">影视</a></div>
                        <div class="float-left fluid-item slite-4"><a href="https://haokan.baidu.com/tab/yinyue"
                                class="fluid-item-link">音乐</a></div>
                        <div class="float-left fluid-item slite-5"><a href="https://haokan.baidu.com/tab/vlog"
                                class="fluid-item-link">VLOG</a></div>
                        <div class="float-left fluid-item slite-6"><a href="https://haokan.baidu.com/tab/youxi"
                                class="fluid-item-link">游戏</a></div>
                        <div class="float-left fluid-item slite-7"><a href="https://haokan.baidu.com/tab/gaoxiao"
                                class="fluid-item-link">搞笑</a></div>
                        <div class="header-channel-btn float-left">频道<i class="icon-downarrow"></i></div>
                    </div>
                    <div class="search clearfix">
                        <div class="search-wrap float-left"><input id="search_input" autocomplete="off"
                                placeholder="12组关键词读懂两高" class="input" type="text" maxlength="255" value="">

                        </div>
                        <div class="search-btn float-right"><i class="search-icon icon-search"></i><span
                                class="search-btn-text">搜索</span></div>
                    </div>
                    <div class="header-right float-right">
                        <ul class="header-link clearfix">
                            <li class="link-item"><a class="link"><i class="icon-upload upload"></i>
                                    <p class="link-text">上传</p>
                                </a></li>
                            <li class="link-item download-hover"><a href="https://haokan.baidu.com/videoui/page/show"
                                    target="_blank" class="link"><i class="icon-download upload"></i>
                                    <p class="link-text">客户端</p>
                                </a>
                                <div class="download">
                                    <p class="download-title">扫码下载好看APP</p><img class="download-img"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdQAAAHUAQMAAAC56UsvAAAABlBMVEX/QUH///8HJnqwAAACUElEQVR42u3cQW7DMAxEUd3A97+lb6C2qSUOSbsFuukE+EYQpI6eV5ZKkXTG/PNxDizWzp5jH3G1z5PH/Drz+nANe32IwVispdV58TVA7PWu42UiYLGO9kz39nXzryPd+WUwFuts11zQP9NXWOzb2fztdebAYt/E6r5yDYtYZQfhv8U5WKyDrdvDH1+P+1As1sG21F/Mhe9ZMFP08pgnxGId7Fq0Nd0XGZIhV2v5QCzWzq6v6ixYr7jsvlROpGCxhvb+Ph+jVxIj9sZi/WzdIa589bZRlFnvWKyvnbOk9Wpyr8QqE4t1teeInN4qxFyx905lH7Ou51isp5WlWwuI6YaX9HUMxmI97d5IjrSS75NlcCz7WKybXUv3XuHTdjLn+m5qi1islZVmvLq877S2JP1qrILFutmR2pb2RUo3SP8vgMXaWW1eOm7icI1V9jazpk2wWBOb8yT1uYARqeyYI9oKgsW62ZnX7aO1KmnXdK6VY7GOtqX1oigzRu3le+qjxmL/3eYMSZkXfc84z7rfxGKNrNznKTdSaovayNRbqbFYJ5v6lIRoRUar6hqrYLFGNmf5ntb5WrUZWKyl1f1jaZOWljyNyVP5Bou1sqUckzeYqSsvhytYrKOds6c+eu9HKZSPp8dysdj/tbuD9O4HOjTRl+rjWKyr7et8lGBaY2pN/WGxbrbUx3PIHU+7SKyCxb6B1Qe1Sq5P2vZqXgWL9bR9UpSU9czPhmOxhrY9rnIzBfKzLaWUg8X62LqXnDmnfabe6Z4bxGKN7J8PLNbOfgCFhWzALvp1XgAAAABJRU5ErkJggg=="
                                        alt="下载二维码">
                                    <p class="download-text">iPhone Android</p>
                                </div>
                            </li>
                            <li class="link-item"><a href="https://haokan.baidu.com/videoui/page/subscribefeed"
                                    class="link"><i class="icon-guanzhu upload icon-red-point"></i>
                                    <p class="link-text">关注动态</p>
                                </a></li>
                            <li class="userinfo float-left">
                                <div class="userinfo-avatar"
                                    style="background-image: url(&quot;https://himg.bdimg.com/sys/portrait/item/wise.1.368d1757.fGbvli2mR8wd9LEYvFjmAw.jpg?time=8218&quot;);">
                                </div>
                                <ul class="userinfo-list">
                                    <li class="userinfo-item"><a
                                            href="https://haokan.baidu.com/videoui/page/pc/ucenter"><i
                                                class="icon icon-personalcenter"></i>个人中心</a></li>
                                    <li class="userinfo-item">
                                        <p><i class="icon icon-creator"></i>创作中心</p>
                                    </li>
                                    <li class="userinfo-item"><a
                                            href="https://haokan.baidu.com/videoui/page/pc/ucenter#/message"><i
                                                class="icon icon-message"></i>消息中心</a></li>
                                    <li class="userinfo-item">
                                        <p><i class="icon icon-quit"></i>退出账号</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="page">
            <div class="page-top">
                <div class="page-left">
                    <div class="art-player-wrapper">
                        <div id="mse" class=" art-auto-size">
                            <div class="art-undercover"></div>
                            <div class="art-video-player art-subtitle-show art-layer-show art-control-show art-hover"
                                style="--theme: rgba(255,64,64,0.7); width: 100%;"><video class="art-video"
                                    preload="metadata" crossorigin="anonymous" autoplay=""
                                    src="https://vd4.bdstatic.com/mda-nc7ert0a4q3ev193/sc/cae_h264_delogo/1646735481084388013/mda-nc7ert0a4q3ev193.mp4?v_from_s=hkapp-haokan-hna&amp;auth_key=1646851890-0-0-370fd452df8c09a7e4af97d0a6d7b211&amp;bcevod_channel=searchbox_feed&amp;cd=0&amp;pd=1&amp;pt=3&amp;logid=1290808805&amp;vid=11877332515796690602&amp;abtest=100815_2-17451_2&amp;klogid=1290808805"></video>
                                <div class="art-poster"
                                    style="background-image: url(&quot;https://f7.baidu.com/it/u=3770871070,1770162692&amp;fm=222&amp;app=108&amp;f=JPEG@s_0,w_800,h_1000,q_80&quot;); display: none;">
                                </div>
                                <div class="art-subtitle"></div>
                                <div class="art-danmuku"></div>
                                <div class="art-layers"></div>
                                <div class="art-mask">
                                    <div class="art-state"><i class=" art-icon art-icon-state"><svg width="88px"
                                                height="88px" viewBox="0 0 88 88" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="起播前" transform="translate(-513.000000, -277.000000)">
                                                        <g id="编组-3备份" transform="translate(-0.000000, 0.000000)">
                                                            <g id="编组-4备份-2"
                                                                transform="translate(513.000000, 277.000000)">
                                                                <rect id="矩形" fill="#D8D8D8" opacity="0" x="0" y="0"
                                                                    width="88" height="88"></rect>
                                                                <path
                                                                    d="M20.8027211,8.82993197 C25.7620127,8.82993197 29.7823129,12.7664759 29.7823129,17.622449 L29.7823129,70.377551 C29.7823129,75.2335241 25.7620127,79.170068 20.8027211,79.170068 C15.8434295,79.170068 11.8231293,75.2335241 11.8231293,70.377551 L11.8231293,17.622449 C11.8231293,12.7664759 15.8434295,8.82993197 20.8027211,8.82993197 Z M67.2762011,8.82993197 C72.1919052,8.82993197 76.1768707,12.8148975 76.1768707,17.7306016 L76.1768707,70.2693984 C76.1768707,75.1851025 72.1919052,79.170068 67.2762011,79.170068 L67.1183567,79.170068 C62.2026526,79.170068 58.2176871,75.1851025 58.2176871,70.2693984 L58.2176871,17.7306016 C58.2176871,12.8148975 62.2026526,8.82993197 67.1183567,8.82993197 L67.2762011,8.82993197 Z"
                                                                    id="形状结合" fill="#FFFFFF" opacity="0"></path>
                                                                <path
                                                                    d="M29.1439868,77.6111584 L73.2755267,51.0541979 C77.2066261,48.688587 78.4757052,43.5840948 76.1100944,39.6529955 C75.4051109,38.4814756 74.4218637,37.5020756 73.2475889,36.8016903 L28.9277397,10.3675267 C24.9873964,8.01734546 19.8879188,9.30642648 17.5377375,13.2467697 C16.7651287,14.5421353 16.3597611,16.0234035 16.3651209,17.5316699 L16.5534302,70.522794 C16.569734,75.1107555 20.3022285,78.8168164 24.89019,78.8005126 C26.3894694,78.7951847 27.8593605,78.3842057 29.1439868,77.6111584 Z"
                                                                    id="路径" fill="#FFFFFF" fill-rule="nonzero"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></i></div>
                                </div>
                                <div class="art-bottom">
                                    <div class="art-progress">
                                        <div class=" art-control art-control-progress" data-index="10">
                                            <div class="art-control-progress-inner">
                                                <div class="art-progress-loaded" style="width: 43.9447%;"></div>
                                                <div class="art-progress-played"
                                                    style="background: rgba(255, 64, 64, 0.7); width: 14.4305%;"></div>
                                                <div class="art-progress-highlight"></div>
                                                <div class="art-progress-indicator"
                                                    style="background: rgba(255, 64, 64, 0.7); left: calc(14.4305% - 9px);">
                                                </div>
                                                <div class="art-progress-tip art-tip"></div>
                                            </div>
                                        </div>
                                        <div class=" art-control art-control-loop" data-index="30"><span
                                                class="art-loop-point"></span><span class="art-loop-point"></span></div>
                                    </div>
                                    <div class="art-controls">
                                        <div class="art-controls-left">
                                            <div class=" art-control art-control-playAndPause" data-index="10"
                                                aria-label="暂停" data-balloon-pos="up"><i class=" art-icon art-icon-play"
                                                    aria-label="播放" data-balloon-pos="up" style="display: none;"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                        viewBox="0 0 28 28">
                                                        <path
                                                            d="M 21.2 17.3 C 21.2 17.3 21.2 17.3 11.399999999999999 23.200000000000003C 9.599999999999998 24.300000000000004 7.299999999999999 23.700000000000003 6.199999999999998 21.900000000000002C 5.799999999999998 21.3 5.699999999999998 20.6 5.699999999999998 19.900000000000002C 5.699999999999998 8.1 5.699999999999998 8.1 5.699999999999998 8.1C 5.699999999999998 6 7.399999999999999 4.3 9.499999999999998 4.3C 10.199999999999998 4.3 10.899999999999999 4.5 11.499999999999998 4.8C 11.499999999999998 4.8 11.499999999999998 4.8 21.299999999999997 10.7C 23.099999999999998 11.799999999999999 23.699999999999996 14.1 22.599999999999998 15.899999999999999C 22.2 16.5 21.7 16.9 21.2 17.3C 21.2 17.3 21.2 17.3 21.2 17.3">
                                                        </path>
                                                    </svg></i><i class=" art-icon art-icon-pause" aria-label="暂停"
                                                    data-balloon-pos="up" style="display: none;"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="28" height="28">
                                                        <path fill="#fff"
                                                            d="M 20.57 25.5 C 18.419935730782658 25.51609501264857 16.662441003697012 23.789017603313443 16.641 21.638999999999996C 16.641 6.361 16.641 6.361 16.641 6.361C 16.68918139255758 4.225607404744156 18.434063909555775 2.5196510011223547 20.570000000000014 2.5196510011223627C 22.705936090444258 2.519651001122371 24.450818607442436 4.225607404744185 24.499000000000002 6.361000000000018C 24.499000000000002 21.639 24.499000000000002 21.639 24.499000000000002 21.639C 24.47755899630298 23.789017603313457 22.720064269217325 25.516095012648577 20.569999999999986 25.499999999999996C 20.57 25.5 20.57 25.5 20.57 25.5M 7.4299999999999855 25.499999999999996 C 7.4299999999999855 25.499999999999996 7.4299999999999855 25.499999999999996 7.4299999999999855 25.499999999999996C 5.279546652516016 25.516649329606523 3.5214407273795896 23.789410913079355 3.499999999999999 21.639C 3.499999999999999 6.361 3.499999999999999 6.361 3.499999999999999 6.361C 3.5214403093372475 4.210195654866002 5.280157596304979 2.4827961521994055 7.4310000000000045 2.5000000000000004C 7.4310000000000045 2.5000000000000004 7.4310000000000045 2.5000000000000004 7.4310000000000045 2.5000000000000004C 9.581064269217341 2.4839049873514316 11.338558996302988 4.210982396686553 11.36 6.361000000000001C 11.36 21.639 11.36 21.639 11.36 21.639C 11.338558996302982 23.789017603313457 9.581064269217325 25.516095012648574 7.4309999999999885 25.499999999999996C 7.4299999999999855 25.499999999999996 7.4299999999999855 25.499999999999996 7.4299999999999855 25.499999999999996">
                                                        </path>
                                                    </svg></i><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 144 144" width="144" height="144"
                                                    preserveAspectRatio="xMidYMid meet"
                                                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                                    <defs>
                                                        <clippath id="__lottie_element_7">
                                                            <rect width="144" height="144" x="0" y="0"></rect>
                                                        </clippath>
                                                        <clippath id="__lottie_element_9">
                                                            <path d="M0,0 L300,0 L300,300 L0,300z"></path>
                                                        </clippath>
                                                    </defs>
                                                    <g clip-path="url(#__lottie_element_7)">
                                                        <g clip-path="url(#__lottie_element_9)"
                                                            transform="matrix(0.5299999713897705,0,0,0.5299999713897705,-7.499992370605469,-7.499992370605469)"
                                                            opacity="1" style="display: block;">
                                                            <g transform="matrix(2.144155263900757,0.00047613659990020096,-0.00047613659990020096,2.144155263900757,150.75,149.75)"
                                                                opacity="1" style="display: none;">
                                                                <g opacity="1"
                                                                    transform="matrix(0.9976699948310852,0,0,0.9957000017166138,0.3240000009536743,0.3720000088214874)">
                                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                        d=" M-27.2726993560791,-28.58867073059082 C-27.29880714416504,-13.952627182006836 -27.303895950317383,9.253801345825195 -27.288015365600586,25.031768798828125 C-27.278100967407227,35.1683464050293 -20.98604965209961,37.75764083862305 -12.548752784729004,32.57849884033203 C0.4812746047973633,24.580541610717773 18.268787384033203,13.664167404174805 30.233678817749023,6.327102184295654 C37.27855682373047,2.0074641704559326 36.923912048339844,-5.506195545196533 29.887229919433594,-9.654569625854492 C16.953258514404297,-17.279508590698242 -1.4748835563659668,-28.10704231262207 -14.285890579223633,-35.691986083984375 C-21.173524856567383,-39.769325256347656 -27.259620666503906,-35.97321701049805 -27.2726993560791,-28.58867073059082z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;">
                                                                <g>
                                                                    <path></path>
                                                                </g>
                                                            </g>
                                                            <g style="display: block;"
                                                                transform="matrix(0.9999967813491821,-0.0025329801719635725,0.0025329801719635725,0.9999967813491821,142.00477600097656,152.02088928222656)"
                                                                opacity="1">
                                                                <g opacity="1"
                                                                    transform="matrix(1,0,0,1,-36.566001892089844,-2.125)">
                                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                        d=" M18.5,-54.85099792480469 C18.5,-54.85099792480469 18.5,54.85099792480469 18.5,54.85099792480469 C18.5,64.78519439697266 10.434200286865234,72.85099792480469 0.5,72.85099792480469 C0.5,72.85099792480469 0.5,72.85099792480469 0.5,72.85099792480469 C-9.434200286865234,72.85099792480469 -17.5,64.78519439697266 -17.5,54.85099792480469 C-17.5,54.85099792480469 -17.5,-54.85099792480469 -17.5,-54.85099792480469 C-17.5,-64.78519439697266 -9.434200286865234,-72.85099792480469 0.5,-72.85099792480469 C0.5,-72.85099792480469 0.5,-72.85099792480469 0.5,-72.85099792480469 C10.434200286865234,-72.85099792480469 18.5,-64.78519439697266 18.5,-54.85099792480469z">
                                                                    </path>
                                                                </g>
                                                                <g opacity="1"
                                                                    transform="matrix(1,0,0,1,52.433998107910156,-2.125)">
                                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                        d=" M18.5,-54.85099792480469 C18.5,-54.85099792480469 18.5,54.85099792480469 18.5,54.85099792480469 C18.5,64.78519439697266 10.434200286865234,72.85099792480469 0.5,72.85099792480469 C0.5,72.85099792480469 0.5,72.85099792480469 0.5,72.85099792480469 C-9.434200286865234,72.85099792480469 -17.5,64.78519439697266 -17.5,54.85099792480469 C-17.5,54.85099792480469 -17.5,-54.85099792480469 -17.5,-54.85099792480469 C-17.5,-64.78519439697266 -9.434200286865234,-72.85099792480469 0.5,-72.85099792480469 C0.5,-72.85099792480469 0.5,-72.85099792480469 0.5,-72.85099792480469 C10.434200286865234,-72.85099792480469 18.5,-64.78519439697266 18.5,-54.85099792480469z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(1,0,0,1,150,150)" opacity="1"
                                                                style="display: block;">
                                                                <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                        d=" M-185.5,-191.5"></path>
                                                                    <path stroke-linecap="butt" stroke-linejoin="miter"
                                                                        fill-opacity="0" stroke-miterlimit="4"
                                                                        stroke="rgb(255,255,255)" stroke-opacity="1"
                                                                        stroke-width="7" d=" M-185.5,-191.5"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                            <div class=" art-control art-control-next" data-index="15" aria-label="下一集"
                                                data-balloon-pos="up"><svg width="28px" height="28px"
                                                    viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g id="默认态-全集/暂停态"
                                                            transform="translate(-56.000000, -610.000000)">
                                                            <g id="下一个视频" transform="translate(56.000000, 610.000000)">
                                                                <rect id="矩形" fill="#D8D8D8" opacity="0" x="0" y="0"
                                                                    width="28" height="28"></rect>
                                                                <path
                                                                    d="M22.5,5 C23.3284271,5 24,5.67157288 24,6.5 L24,21.5 C24,22.3284271 23.3284271,23 22.5,23 C21.6715729,23 21,22.3284271 21,21.5 L21,6.5 C21,5.67157288 21.6715729,5 22.5,5 Z M4.29358916,6.53826565 C4.86399046,5.56633117 6.11430064,5.24082421 7.08623512,5.8112255 L7.08623512,5.8112255 L18.0146356,12.2247996 C18.3127487,12.3997539 18.5615319,12.6475711 18.7376446,12.9450014 C19.3118226,13.9147096 18.9911821,15.1662766 18.0214739,15.7404546 L18.0214739,15.7404546 L7.1395068,22.1838222 C6.82689585,22.3689236 6.47053429,22.4672068 6.10723494,22.4685188 C4.98029319,22.4725888 4.06342702,21.5623214 4.05935702,20.4353797 L4.05935702,20.4353797 L4.01292367,7.57843793 C4.01160327,7.21283101 4.10853731,6.85358449 4.29358916,6.53826565 Z"
                                                                    id="形状结合" fill="#FFFFFF" fill-rule="nonzero"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></div>
                                            <div class=" art-control art-control-time" data-index="30"><span
                                                    class="currentTime">00:12</span> / <span
                                                    class="durationTime">01:26</span></div>
                                        </div>
                                        <div class="art-controls-right">
                                            <div class=" art-control art-control-playrate art-control-selector"
                                                data-index="10">
                                                <div class=" art-selector-value">倍速</div>
                                                <div class=" art-selector-list-wrap">
                                                    <div class=" art-selector-list">
                                                        <div data-id="undefined" class="art-selector-item "><svg
                                                                width="13px" height="13px" viewBox="0 0 13 13"
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFFFFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>2x</div>
                                                        <div data-id="undefined" class="art-selector-item "><svg
                                                                width="13px" height="13px" viewBox="0 0 13 13"
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFFFFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>1.5x</div>
                                                        <div class="art-selector-item art-selector-item-active"
                                                            style="color: hsla(0,0%,100%,.8)"><svg width="13px"
                                                                height="13px" viewBox="0 0 13 13" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>1x</div>
                                                        <div data-id="undefined" class="art-selector-item "><svg
                                                                width="13px" height="13px" viewBox="0 0 13 13"
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFFFFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>0.5x</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" art-control art-control-quality art-control-selector"
                                                data-index="20">
                                                <div class=" art-selector-value">超清</div>
                                                <div class=" art-selector-list-wrap">
                                                    <div class=" art-selector-list">
                                                        <div data-id="3" class="art-selector-item "><svg width="13px"
                                                                height="13px" viewBox="0 0 13 13" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFFFFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>蓝光</div>
                                                        <div data-id="2"
                                                            class="art-selector-item art-selector-item-active "
                                                            style="color: hsla(0,0%,100%,.8)"><svg width="13px"
                                                                height="13px" viewBox="0 0 13 13" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>超清</div>
                                                        <div data-id="1" class="art-selector-item "><svg width="13px"
                                                                height="13px" viewBox="0 0 13 13" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFFFFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>高清</div>
                                                        <div data-id="0" class="art-selector-item "><svg width="13px"
                                                                height="13px" viewBox="0 0 13 13" version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <g id="默认态-全集/暂停态"
                                                                        transform="translate(-800.000000, -509.000000)">
                                                                        <g id="编组-22备份-4"
                                                                            transform="translate(776.000000, 396.000000)">
                                                                            <g id="编组-3"
                                                                                transform="translate(14.000000, 24.000000)">
                                                                                <g id="Group"
                                                                                    transform="translate(10.000000, 0.000000)">
                                                                                    <g id="编组-15"
                                                                                        transform="translate(0.000000, 87.000000)">
                                                                                        <g id="对勾_选中态"
                                                                                            transform="translate(0.000000, 2.000000)">
                                                                                            <rect id="矩形" fill="#D8D8D8"
                                                                                                opacity="0" x="0" y="0"
                                                                                                width="13" height="13">
                                                                                            </rect>
                                                                                            <path
                                                                                                d="M11.3866323,2 L13,3.59433916 L5.81695538,10.3519727 C5.4304723,10.7155666 4.82729103,10.7139835 4.44272184,10.3483659 L0.510970477,6.61037162 L0.510970477,6.61037162 L2.10678151,5 L5.11057637,7.90484438 L11.3866323,2 Z"
                                                                                                id="路径" fill="#FFFFFF"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>标清</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" art-control art-control-volume" data-index="30">
                                                <div class="art-animation-volume" style="display: none;"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"
                                                        width="60" height="60" preserveAspectRatio="xMidYMid meet"
                                                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                                        <defs>
                                                            <clippath id="__lottie_element_25">
                                                                <rect width="60" height="60" x="0" y="0"></rect>
                                                            </clippath>
                                                        </defs>
                                                        <g clip-path="url(#__lottie_element_25)">
                                                            <g transform="matrix(2,0,0,2,-18,-18)" opacity="1"
                                                                style="display: block;">
                                                                <g opacity="1"
                                                                    transform="matrix(1,0,0,1,18.775999069213867,24.22100067138672)">
                                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                        d=" M3.739000082015991,-8 C4.014999866485596,-8 4.238999843597412,-7.776000022888184 4.238999843597412,-7.5 C4.238999843597412,-7.5 4.238999843597412,7.144000053405762 4.238999843597412,7.144000053405762 C4.238999843597412,7.251999855041504 4.203999996185303,7.35699987411499 4.139999866485596,7.442999839782715 C3.9749999046325684,7.664000034332275 3.6619999408721924,7.710000038146973 3.440999984741211,7.545000076293945 C3.440999984741211,7.545000076293945 -1.2230000495910645,4.077000141143799 -1.2230000495910645,4.077000141143799 C-1.6019999980926514,3.7950000762939453 -2.062999963760376,3.6429998874664307 -2.5350000858306885,3.6429998874664307 C-2.5350000858306885,3.6429998874664307 -3.755000114440918,3.6429998874664307 -3.755000114440918,3.6429998874664307 C-4.021999835968018,3.6429998874664307 -4.238999843597412,3.4260001182556152 -4.238999843597412,3.1589999198913574 C-4.238999843597412,3.1589999198913574 -4.238999843597412,-3.5380001068115234 -4.238999843597412,-3.5380001068115234 C-4.238999843597412,-3.805000066757202 -4.021999835968018,-4.021999835968018 -3.755000114440918,-4.021999835968018 C-3.755000114440918,-4.021999835968018 -2.5329999923706055,-4.021999835968018 -2.5329999923706055,-4.021999835968018 C-2.062999963760376,-4.021999835968018 -1.6050000190734863,-4.172999858856201 -1.2259999513626099,-4.452000141143799 C-1.2259999513626099,-4.452000141143799 3.441999912261963,-7.9019999504089355 3.441999912261963,-7.9019999504089355 C3.5280001163482666,-7.966000080108643 3.631999969482422,-8 3.739000082015991,-8z M3.739000082015991,-10.199999809265137 C3.1610000133514404,-10.199999809265137 2.5989999771118164,-10.015000343322754 2.134000062942505,-9.670999526977539 C2.134000062942505,-9.670999526977539 -2.5339999198913574,-6.2210001945495605 -2.5339999198913574,-6.2210001945495605 C-2.5339999198913574,-6.2210001945495605 -3.755000114440918,-6.2210001945495605 -3.755000114440918,-6.2210001945495605 C-5.236999988555908,-6.2210001945495605 -6.439000129699707,-5.019999980926514 -6.439000129699707,-3.5380001068115234 C-6.439000129699707,-3.5380001068115234 -6.439000129699707,3.1589999198913574 -6.439000129699707,3.1589999198913574 C-6.439000129699707,4.640999794006348 -5.236999988555908,5.8429999351501465 -3.755000114440918,5.8429999351501465 C-3.755000114440918,5.8429999351501465 -2.5360000133514404,5.8429999351501465 -2.5360000133514404,5.8429999351501465 C-2.5360000133514404,5.8429999351501465 2.128000020980835,9.310999870300293 2.128000020980835,9.310999870300293 C3.3239998817443848,10.199999809265137 5.014999866485596,9.95199966430664 5.906000137329102,8.755000114440918 C6.251999855041504,8.288999557495117 6.439000129699707,7.724999904632568 6.439000129699707,7.144000053405762 C6.439000129699707,7.144000053405762 6.439000129699707,-7.5 6.439000129699707,-7.5 C6.439000129699707,-8.991000175476074 5.230000019073486,-10.199999809265137 3.739000082015991,-10.199999809265137z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(2,0,0,2,-18,-18)" opacity="1"
                                                                style="display: block;">
                                                                <g opacity="1"
                                                                    transform="matrix(1,0,0,1,33.020999908447266,24.54800033569336)">
                                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                        d=" M-2.5160000324249268,-6.179999828338623 C-2.5160000324249268,-6.179999828338623 -2.2860000133514404,-5.966000080108643 -2.2860000133514404,-5.966000080108643 C-0.625,-4.377999782562256 0.3790000081062317,-2.2049999237060547 0.3790000081062317,0.03999999910593033 C0.3790000081062317,2.5299999713897705 -0.75,4.909999847412109 -2.441999912261963,6.421999931335449 C-2.441999912261963,6.421999931335449 -0.8270000219345093,7.820000171661377 -0.8270000219345093,7.820000171661377 C-0.8270000219345093,7.820000171661377 -0.5899999737739563,7.60099983215332 -0.5899999737739563,7.60099983215332 C1.4320000410079956,5.668000221252441 2.5160000324249268,2.9609999656677246 2.5160000324249268,-0.02199999988079071 C2.5160000324249268,-3.010999917984009 1.2089999914169312,-5.801000118255615 -1.0509999990463257,-7.820000171661377 C-1.0509999990463257,-7.820000171661377 -2.5160000324249268,-6.179999828338623 -2.5160000324249268,-6.179999828338623z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g style="display: none;">
                                                                <g>
                                                                    <path></path>
                                                                </g>
                                                            </g>
                                                            <g transform="matrix(2,0,0,2,-18,-18)" opacity="1"
                                                                style="display: block;">
                                                                <g opacity="1"
                                                                    transform="matrix(1,0,0,1,29.371999740600586,24.70800018310547)">
                                                                    <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                        d=" M-1.7549999952316284,-3.506999969482422 C-1.7549999952316284,-3.506999969482422 -1.5770000219345093,-3.2899999618530273 -1.5770000219345093,-3.2899999618530273 C-0.8360000252723694,-2.3389999866485596 -0.4339999854564667,-1.2009999752044678 -0.4339999854564667,-0.00800000037997961 C-0.4339999854564667,1.281999945640564 -0.9070000052452087,2.50600004196167 -1.7660000324249268,3.503000020980835 C-1.7660000324249268,3.503000020980835 -0.10000000149011612,4.939000129699707 -0.10000000149011612,4.939000129699707 C-0.10000000149011612,4.939000129699707 0.10499999672174454,4.692999839782715 0.10499999672174454,4.692999839782715 C1.1740000247955322,3.3480000495910645 1.7660000324249268,1.7120000123977661 1.7660000324249268,-0.00800000037997961 C1.7660000324249268,-1.8279999494552612 1.1050000190734863,-3.552999973297119 -0.08500000089406967,-4.939000129699707 C-0.08500000089406967,-4.939000129699707 -1.7549999952316284,-3.506999969482422 -1.7549999952316284,-3.506999969482422z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></div>
                                                <div class="art-volume-hover-area">
                                                    <div class="art-volume-panel-wrap"><span class="volume-text"
                                                            id="volume-text">0%</span>
                                                        <div class="art-volume-panel">
                                                            <div class="art-volume-slider-handle" style="bottom: 0px;">
                                                            </div>
                                                            <div class="art-volume-top-bottom">
                                                                <div class="art-volume-top" style="bottom: 0px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><i class=" art-icon art-icon-volumeClose"
                                                    style="display: flex;"><svg width="24px" height="24px"
                                                        viewBox="0 0 24 24" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <defs>
                                                            <rect id="path-1" x="0" y="0" width="24" height="24"></rect>
                                                        </defs>
                                                        <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g id="默认态-全集/暂停态"
                                                                transform="translate(-903.000000, -614.000000)">
                                                                <g id="编组-3备份"
                                                                    transform="translate(-3.166993, 0.000000)">
                                                                    <g id="编组-9"
                                                                        transform="translate(774.166993, 614.000000)">
                                                                        <g id="音量关"
                                                                            transform="translate(132.000000, 0.000000)">
                                                                            <mask id="mask-2" fill="white">
                                                                                <use xlink:href="#path-1"></use>
                                                                            </mask>
                                                                            <use id="矩形" fill="#D8D8D8" opacity="0"
                                                                                xlink:href="#path-1"></use>
                                                                            <g id="音量" mask="url(#mask-2)">
                                                                                <g
                                                                                    transform="translate(0.337596, 2.020500)">
                                                                                    <path
                                                                                        d="M10.1774025,0 C11.6685714,0 12.8774025,1.20883118 12.8774025,2.7 L12.8774025,2.7 L12.8774025,17.3441818 C12.8774025,17.9246337 12.6903425,18.4896325 12.3439584,18.9554035 C11.4541052,20.1519593 9.76273657,20.4005909 8.56618079,19.5107377 L8.56618079,19.5107377 L3.90258965,16.0425237 L2.68354971,16.0427625 C1.20146613,16.0427625 0,14.8412964 0,13.3592128 L0,13.3592128 L0,6.66195701 C0,5.17987343 1.20146613,3.9784073 2.68354971,3.9784073 L2.68354971,3.9784073 L3.9047581,3.978468 L8.572678,0.528627365 C9.03726025,0.185283929 9.59971631,0 10.1774025,0 Z M10.1774025,2.2 C10.0704236,2.2 9.96626508,2.23431184 9.88023133,2.29789396 L9.88023133,2.29789396 L5.21197112,5.74791062 C4.83363067,6.02751818 4.37558501,6.1784073 3.90513641,6.1784073 L3.90513641,6.1784073 L2.68354971,6.1784073 C2.41649258,6.1784073 2.2,6.39489988 2.2,6.66195701 L2.2,6.66195701 L2.2,13.3592128 C2.2,13.62627 2.41649258,13.8427625 2.68354971,13.8427625 L2.68354971,13.8427625 L3.90331119,13.8427625 C4.37601211,13.8427625 4.8361285,13.9950981 5.21543701,14.2771818 L5.21543701,14.2771818 L9.87902815,17.7453958 C10.1006126,17.9101835 10.413829,17.8641406 10.5786166,17.6425562 C10.6427618,17.5563023 10.6774025,17.4516729 10.6774025,17.3441818 L10.6774025,17.3441818 L10.6774025,2.7 C10.6774025,2.42385763 10.4535449,2.2 10.1774025,2.2 Z M15.2417441,5.93940042 L18.391,9.089 L21.5227042,5.95741478 L23.0783392,7.5130497 L19.946,10.644 L23.0963535,13.7940098 L21.5407186,15.3496448 L18.391,12.2 L15.2597585,15.3316304 L13.7041235,13.7759955 L16.835,10.644 L13.6861092,7.49503534 L15.2417441,5.93940042 Z"
                                                                                        id="形状结合" fill="#FFFFFF"
                                                                                        fill-rule="nonzero"></path>
                                                                                    <g id="编组-2" stroke-width="1"
                                                                                        fill="none" fill-rule="evenodd"
                                                                                        transform="translate(18.391231, 10.644523) rotate(-135.000000) translate(-18.391231, -10.644523) translate(13.937184, 6.215951)">
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></i>
                                            </div>
                                            <div class=" art-control art-control-screenshot" data-index="40"
                                                aria-label="截图" data-balloon-pos="up"><i
                                                    class=" art-icon art-icon-screenshot"><svg width="24px"
                                                        height="24px" viewBox="0 0 26 26" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g id="默认态-全集/暂停态"
                                                                transform="translate(-1106.000000, -313.000000)">
                                                                <g id="icon-截屏备份"
                                                                    transform="translate(1095.000000, 302.000000)">
                                                                    <g id="相机"
                                                                        transform="translate(11.000000, 11.000000)">
                                                                        <rect id="矩形" fill="#D8D8D8" opacity="0" x="0"
                                                                            y="0" width="26" height="26"></rect>
                                                                        <path
                                                                            d="M15.7176638,1.4 C16.8796417,1.4 17.9699155,1.9618172 18.6442827,2.90808437 L18.6442827,2.90808437 L19.13,3.589 L19.4933408,3.62377311 C20.4944555,3.73284486 21.2152983,3.94178199 21.943418,4.30453708 L21.943418,4.30453708 L22.1440559,4.40821378 C23.2514882,5.00047503 24.1271845,5.87617142 24.7194458,6.98360369 C25.372898,8.20545308 25.6,9.38148375 25.6,11.8312731 L25.6,11.8312731 L25.6,15.2963865 C25.6,17.7461758 25.372898,18.9222065 24.7194458,20.1440559 C24.1271845,21.2514882 23.2514882,22.1271845 22.1440559,22.7194458 C20.9222065,23.372898 19.7461758,23.6 17.2963865,23.6 L17.2963865,23.6 L8.70361351,23.6 C6.25382417,23.6 5.0777935,23.372898 3.85594411,22.7194458 C2.74851185,22.1271845 1.87281546,21.2514882 1.2805542,20.1440559 C0.627101999,18.9222065 0.4,17.7461758 0.4,15.2963865 L0.4,15.2963865 L0.401566426,11.4898257 C0.422595542,9.26937693 0.658218771,8.14726977 1.2805542,6.98360369 C1.87281546,5.87617142 2.74851185,5.00047503 3.85594411,4.40821378 C4.72639834,3.94268976 5.54890147,3.70193214 6.80685611,3.59526611 L6.80685611,3.59526611 L6.857,3.591 L7.34451416,2.90808437 C7.97673341,2.0209589 8.97449553,1.47172891 10.0541865,1.40654049 L10.0541865,1.40654049 L10.271133,1.4 Z M15.7176638,3.6 L10.271133,3.6 C9.82048374,3.6 9.39764344,3.81788927 9.13610395,4.18487958 L9.13610395,4.18487958 L8.62929558,4.89602943 C8.55266563,5.00355601 8.48120589,5.11223341 8.41494058,5.2220949 C8.22555352,5.53608033 7.89216331,5.73505226 7.52590726,5.75268238 C6.21780471,5.81564928 5.59441221,5.97333033 4.8934616,6.34820281 C4.16941998,6.73542451 3.60776494,7.29707955 3.22054324,8.02112118 L3.22054324,8.02112118 L3.15689018,8.14387599 L3.04142451,8.39169685 C2.82592275,8.89381868 2.701568,9.44841501 2.64260947,10.3001748 L2.64260947,10.3001748 L2.61846068,10.7519511 L2.60449595,11.2600515 C2.60145891,11.4395609 2.6,11.6295905 2.6,11.8312731 L2.6,15.2963865 L2.60449595,15.867608 L2.61846068,16.3757085 L2.64260947,16.8274848 C2.71630763,17.8921845 2.89218739,18.4925663 3.22054324,19.1065384 C3.60776494,19.83058 4.16941998,20.3922351 4.8934616,20.7794568 C5.50743365,21.1078126 6.10781549,21.2836924 7.17251519,21.3573905 L7.17251519,21.3573905 L7.62429151,21.3815393 L8.13239198,21.395504 L8.70361351,21.4 L17.2963865,21.4 L17.867608,21.395504 L18.3757085,21.3815393 L18.8274848,21.3573905 C19.8921845,21.2836924 20.4925663,21.1078126 21.1065384,20.7794568 C21.83058,20.3922351 22.3922351,19.83058 22.7794568,19.1065384 C23.1078126,18.4925663 23.2836924,17.8921845 23.3573905,16.8274848 L23.3573905,16.8274848 L23.3815393,16.3757085 L23.395504,15.867608 L23.4,15.2963865 L23.4,11.8312731 L23.395504,11.2600515 L23.3815393,10.7519511 L23.3573905,10.3001748 C23.298432,9.44841501 23.1740772,8.89381868 22.9585755,8.39169685 L22.9585755,8.39169685 L22.8431098,8.14387599 L22.7794568,8.02112118 C22.3922351,7.29707955 21.83058,6.73542451 21.1065384,6.34820281 C20.4039992,5.97248076 19.7784238,5.81453288 18.4628243,5.75135337 C18.0978484,5.73382601 17.7653984,5.53620802 17.5756091,5.22396677 C17.5076418,5.11214696 17.4355666,5.00276378 17.3595013,4.89602943 L17.3595013,4.89602943 L16.8526929,4.18487958 C16.5911534,3.81788927 16.1683131,3.6 15.7176638,3.6 L15.7176638,3.6 Z M13.0201619,8.42395132 C15.7748125,8.42395132 18.0245522,10.589418 18.0245522,13.282087 C18.0245522,15.974756 15.7748125,18.1402227 13.0201619,18.1402227 C10.2655114,18.1402227 8.01577169,15.974756 8.01577169,13.282087 C8.01577169,10.589418 10.2655114,8.42395132 13.0201619,8.42395132 Z M13.0201619,10.6239513 C11.4621421,10.6239513 10.2157717,11.823634 10.2157717,13.282087 C10.2157717,14.7405401 11.4621421,15.9402227 13.0201619,15.9402227 C14.5781818,15.9402227 15.8245522,14.7405401 15.8245522,13.282087 C15.8245522,11.823634 14.5781818,10.6239513 13.0201619,10.6239513 Z"
                                                                            id="形状结合" fill="#FFFFFF"
                                                                            fill-rule="nonzero"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></i></div>
                                            <div class=" art-control art-control-pip" data-index="50" aria-label="画中画模式"
                                                data-balloon-pos="up"><i class=" art-icon art-icon-pip"><svg
                                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g id="鼠标悬浮态"
                                                                transform="translate(-1011.000000, -614.000000)">
                                                                <g id="编组-3备份"
                                                                    transform="translate(-0.000000, 0.000000)">
                                                                    <g id="编组-9"
                                                                        transform="translate(771.000000, 614.000000)">
                                                                        <g id="网页全屏icon备份"
                                                                            transform="translate(240.000000, 0.000000)">
                                                                            <rect id="矩形" fill="#D8D8D8" opacity="0"
                                                                                x="0" y="0" width="24" height="24">
                                                                            </rect>
                                                                            <g id="编组-16"
                                                                                transform="translate(3.000000, 3.000000)">
                                                                                <path
                                                                                    d="M6.02375417,18 L4.41666657,18 C1.97740898,18 2.987229e-16,16.022591 0,13.5833334 L0,4.41666657 C-2.987229e-16,1.97740898 1.97740898,-4.4009407e-16 4.41666657,0 L13.5277779,0 C15.9670355,-4.4808435e-16 17.9444444,1.97740898 17.9444444,4.41666657 L17.9444444,6.94881161 L17.9444444,6.94881161"
                                                                                    id="路径" stroke="#FFFFFF"
                                                                                    stroke-width="2.2"
                                                                                    stroke-linecap="square"
                                                                                    stroke-linejoin="round"></path>
                                                                                <rect id="矩形" stroke="#FFFFFF"
                                                                                    stroke-width="2.2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    x="10.5555556" y="11.6470588"
                                                                                    width="8.44444444"
                                                                                    height="6.35294118" rx="2.10317456">
                                                                                </rect>
                                                                                <polyline id="路径-4备份" stroke="#FFFFFF"
                                                                                    stroke-width="2.2"
                                                                                    stroke-linecap="square"
                                                                                    stroke-linejoin="round"
                                                                                    transform="translate(6.838734, 6.948812) scale(-1, -1) translate(-6.838734, -6.948812) "
                                                                                    points="5.25540107 8.5370469 5.25540107 5.36057631 8.42206774 5.36057631">
                                                                                </polyline>
                                                                                <polygon id="矩形" fill="#FFFFFF"
                                                                                    transform="translate(6.163971, 6.008746) rotate(-45.000000) translate(-6.163971, -6.008746) "
                                                                                    points="5.07520753 2.83865288 7.26397133 2.83570116 7.25273513 9.17883841 5.06397133 9.18179013">
                                                                                </polygon>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></i></div>
                                            <div class=" art-control art-control-fullscreenWeb" data-index="60"
                                                aria-label="网页全屏" data-balloon-pos="up"><i
                                                    class=" art-icon art-icon-fullscreenWeb"><svg width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g id="默认态-全集/暂停态"
                                                                transform="translate(-1065.000000, -614.000000)">
                                                                <g id="编组-3备份"
                                                                    transform="translate(-3.166993, 0.000000)">
                                                                    <g id="编组-9"
                                                                        transform="translate(774.166993, 614.000000)">
                                                                        <g id="编组-3"
                                                                            transform="translate(132.000000, 0.000000)">
                                                                            <g id="网页全屏"
                                                                                transform="translate(162.000000, 0.000000)">
                                                                                <rect id="矩形" fill="#D8D8D8" opacity="0"
                                                                                    x="0" y="0" width="24" height="24">
                                                                                </rect>
                                                                                <g id="编组-16"
                                                                                    transform="translate(1.900000, 1.900000)"
                                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                                    <path
                                                                                        d="M14.6997998,-1.84741111e-13 C17.7374765,-1.84741111e-13 20.2,2.46252353 20.2,5.50020024 L20.2,5.50020024 L20.2,14.6997998 C20.2,17.7374765 17.7374765,20.2 14.6997998,20.2 L14.6997998,20.2 L5.50020024,20.2 C2.46252353,20.2 4.26325641e-14,17.7374765 4.26325641e-14,14.6997998 L4.26325641e-14,14.6997998 L4.26325641e-14,5.50020024 C4.26325641e-14,2.46252353 2.46252353,-1.84741111e-13 5.50020024,-1.84741111e-13 L5.50020024,-1.84741111e-13 Z M14.6997998,2.2 L5.50020024,2.2 C3.67754998,2.2 2.2,3.67754998 2.2,5.50020024 L2.2,5.50020024 L2.2,14.6997998 C2.2,16.52245 3.67754998,18 5.50020024,18 L5.50020024,18 L14.6997998,18 C16.52245,18 18,16.52245 18,14.6997998 L18,14.6997998 L18,5.50020024 C18,3.67754998 16.52245,2.2 14.6997998,2.2 L14.6997998,2.2 Z M15.9422599,11.7135175 L15.9422599,14.9311645 C15.9422599,15.4981769 15.5132492,15.9649884 14.962117,16.0247099 L14.8422599,16.0311645 L11.6246128,16.0311645 L11.6246128,13.8311645 L13.7428727,13.831682 L13.7422599,11.7135175 L15.9422599,11.7135175 Z M8.53049519,4.30175278 L8.53049519,6.50175278 L6.412,6.501 L6.41284813,8.61939984 L4.21284813,8.61939984 L4.21284813,5.40175278 C4.21284813,4.83474044 4.64185883,4.36792892 5.19299101,4.30820743 L5.31284813,4.30175278 L8.53049519,4.30175278 Z"
                                                                                        id="形状结合"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></i></div>
                                            <div class=" art-control art-control-miniSwitch" data-index="80">
                                                <div class="mini-wrap-hack">
                                                    <div class="mini-wrap">
                                                        <p>小窗播放功能</p>
                                                        <div class="switch-wrap active"><span></span></div>
                                                    </div>
                                                </div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"
                                                    width="60" height="60" preserveAspectRatio="xMidYMid meet"
                                                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                                    <defs>
                                                        <clippath id="__lottie_element_39">
                                                            <rect width="60" height="60" x="0" y="0"></rect>
                                                        </clippath>
                                                    </defs>
                                                    <g clip-path="url(#__lottie_element_39)">
                                                        <g transform="matrix(2,0,0,2,-18,-18)" opacity="1"
                                                            style="display: block;">
                                                            <g opacity="1"
                                                                transform="matrix(1,0,0,1,23.988000869750977,24.02400016784668)">
                                                                <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                    d=" M1.812999963760376,-8.184000015258789 C1.812999963760376,-8.184000015258789 6.182000160217285,-5.660999774932861 6.182000160217285,-5.660999774932861 C7.302999973297119,-5.013999938964844 7.993000030517578,-3.818000078201294 7.993000030517578,-2.5230000019073486 C7.993000030517578,-2.5230000019073486 7.993000030517578,2.5220000743865967 7.993000030517578,2.5220000743865967 C7.993000030517578,3.816999912261963 7.302999973297119,5.013999938964844 6.182000160217285,5.660999774932861 C6.182000160217285,5.660999774932861 1.812999963760376,8.184000015258789 1.812999963760376,8.184000015258789 C0.6909999847412109,8.831999778747559 -0.6899999976158142,8.831999778747559 -1.812000036239624,8.184000015258789 C-1.812000036239624,8.184000015258789 -6.181000232696533,5.660999774932861 -6.181000232696533,5.660999774932861 C-7.302000045776367,5.013999938964844 -7.993000030517578,3.816999912261963 -7.993000030517578,2.5220000743865967 C-7.993000030517578,2.5220000743865967 -7.993000030517578,-2.5230000019073486 -7.993000030517578,-2.5230000019073486 C-7.993000030517578,-3.818000078201294 -7.302000045776367,-5.013999938964844 -6.181000232696533,-5.660999774932861 C-6.181000232696533,-5.660999774932861 -1.812000036239624,-8.184000015258789 -1.812000036239624,-8.184000015258789 C-0.6899999976158142,-8.831000328063965 0.6909999847412109,-8.831000328063965 1.812999963760376,-8.184000015258789z M-2.9119999408721924,-10.08899974822998 C-2.9119999408721924,-10.08899974822998 -7.281000137329102,-7.565999984741211 -7.281000137329102,-7.565999984741211 C-9.083000183105469,-6.525000095367432 -10.192999839782715,-4.604000091552734 -10.192999839782715,-2.5230000019073486 C-10.192999839782715,-2.5230000019073486 -10.192999839782715,2.5220000743865967 -10.192999839782715,2.5220000743865967 C-10.192999839782715,4.603000164031982 -9.083000183105469,6.525000095367432 -7.281000137329102,7.565999984741211 C-7.281000137329102,7.565999984741211 -2.9119999408721924,10.08899974822998 -2.9119999408721924,10.08899974822998 C-1.1100000143051147,11.128999710083008 1.1100000143051147,11.128999710083008 2.9119999408721924,10.08899974822998 C2.9119999408721924,10.08899974822998 7.281000137329102,7.565999984741211 7.281000137329102,7.565999984741211 C9.083000183105469,6.525000095367432 10.192999839782715,4.603000164031982 10.192999839782715,2.5220000743865967 C10.192999839782715,2.5220000743865967 10.192999839782715,-2.5230000019073486 10.192999839782715,-2.5230000019073486 C10.192999839782715,-4.604000091552734 9.083000183105469,-6.525000095367432 7.281000137329102,-7.565999984741211 C7.281000137329102,-7.565999984741211 2.9119999408721924,-10.08899974822998 2.9119999408721924,-10.08899974822998 C1.1100000143051147,-11.130000114440918 -1.1100000143051147,-11.130000114440918 -2.9119999408721924,-10.08899974822998z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g transform="matrix(2,0,0,2,-18,-18)" opacity="1"
                                                            style="display: block;">
                                                            <g opacity="1"
                                                                transform="matrix(1,0,0,1,23.98900032043457,24.02400016784668)">
                                                                <path fill="rgb(255,255,255)" fill-opacity="1"
                                                                    d=" M-1.7269999980926514,-0.0010000000474974513 C-1.7269999980926514,-0.9549999833106995 -0.953000009059906,-1.7269999980926514 0.0010000000474974513,-1.7269999980926514 C0.9549999833106995,-1.7269999980926514 1.7269999980926514,-0.9549999833106995 1.7269999980926514,-0.0010000000474974513 C1.7269999980926514,0.953000009059906 0.9549999833106995,1.7269999980926514 0.0010000000474974513,1.7269999980926514 C-0.953000009059906,1.7269999980926514 -1.7269999980926514,0.953000009059906 -1.7269999980926514,-0.0010000000474974513z M-3.9260001182556152,-0.0010000000474974513 C-3.9260001182556152,2.1679999828338623 -2.1679999828338623,3.927999973297119 0.0010000000474974513,3.927999973297119 C2.1700000762939453,3.927999973297119 3.9260001182556152,2.1679999828338623 3.9260001182556152,-0.0010000000474974513 C3.9260001182556152,-2.1689999103546143 2.1700000762939453,-3.927999973297119 0.0010000000474974513,-3.927999973297119 C-2.1679999828338623,-3.927999973297119 -3.9260001182556152,-2.1689999103546143 -3.9260001182556152,-0.0010000000474974513z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=" art-control art-control-fullscreen" data-index="90"
                                                aria-label="全屏" data-balloon-pos="up"><i
                                                    class=" art-icon art-icon-fullscreen"><svg width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g id="pc" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g id="默认态-全集/暂停态"
                                                                transform="translate(-1119.000000, -614.000000)">
                                                                <g id="编组-3备份"
                                                                    transform="translate(-3.166993, 0.000000)">
                                                                    <g id="编组-9"
                                                                        transform="translate(774.166993, 614.000000)">
                                                                        <g id="编组-3"
                                                                            transform="translate(132.000000, 0.000000)">
                                                                            <g id="进入全屏"
                                                                                transform="translate(216.000000, 0.000000)">
                                                                                <rect id="矩形" fill="#D8D8D8" opacity="0"
                                                                                    x="0" y="0" width="24" height="24">
                                                                                </rect>
                                                                                <g id="编组-6"
                                                                                    transform="translate(1.900000, 1.900000)"
                                                                                    fill="#FFFFFF" fill-rule="nonzero">
                                                                                    <path
                                                                                        d="M2.2,11.8641439 L2.2,15.0444196 C2.2,16.0753642 2.99775731,16.9199827 4.00963315,16.9946361 L4.15558041,17 L7.33585608,17 L7.33585608,19.2 L4.15558041,19.2 C1.93006411,19.2 0.113157622,17.4505334 0.00508571071,15.251825 L4.26325641e-14,15.0444196 L4.26325641e-14,11.8641439 L2.2,11.8641439 Z M12.7875,11.2318651 L16.9660457,15.409161 C16.9795582,15.3375328 16.9891649,15.2645249 16.9946361,15.1903668 L17,15.0444196 L17,11.8641439 L19.2,11.8641439 L19.2,15.0444196 C19.2,17.2699359 17.4505334,19.0868424 15.251825,19.1949143 L15.0444196,19.2 L11.8641439,19.2 L11.8641439,17 L15.0444196,17 C15.1690509,17 15.2909592,16.9883412 15.4091132,16.9660547 L11.2318651,12.7875 L12.7875,11.2318651 Z M7.33585608,-1.81188398e-13 L7.33585608,2.2 L4.15558041,2.2 C4.03094909,2.2 3.90904083,2.21165882 3.79088678,2.23394531 L7.96813492,6.4125 L6.4125,7.96813492 L2.23395433,3.79083896 C2.2204418,3.86246715 2.21083508,3.93547513 2.2053639,4.00963315 L2.2,4.15558041 L2.2,7.33585608 L4.26325641e-14,7.33585608 L4.26325641e-14,4.15558041 C4.26325641e-14,1.93006411 1.7494666,0.113157622 3.94817503,0.00508571071 L4.15558041,-1.81188398e-13 L7.33585608,-1.81188398e-13 Z M15.0444196,-1.81188398e-13 C17.2699359,-1.81188398e-13 19.0868424,1.7494666 19.1949143,3.94817503 L19.2,4.15558041 L19.2,7.33585608 L17,7.33585608 L17,4.15558041 C17,3.12463577 16.2022427,2.28001734 15.1903668,2.2053639 L15.0444196,2.2 L11.8641439,2.2 L11.8641439,-1.81188398e-13 L15.0444196,-1.81188398e-13 Z"
                                                                                        id="形状结合"></path>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="art-loading"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"
                                        width="60" height="60" preserveAspectRatio="xMidYMid meet"
                                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                                        <defs>
                                            <clippath id="__lottie_element_2">
                                                <rect width="60" height="60" x="0" y="0"></rect>
                                            </clippath>
                                        </defs>
                                        <g clip-path="url(#__lottie_element_2)">
                                            <g transform="matrix(-0.7484853267669678,-0.6631513237953186,0.6631513237953186,-0.7484853267669678,31.165103912353516,30.888776779174805)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1"
                                                    transform="matrix(1,0,0,1,1.0850000381469727,-0.6650000214576721)">
                                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                                        stroke-miterlimit="4" stroke="rgb(255,255,255)"
                                                        stroke-opacity="1" stroke-width="6"
                                                        d=" M16.632999420166016,-15.638999938964844 C20.47800064086914,-11.550999641418457 22.834999084472656,-6.048999786376953 22.834999084472656,0 C22.834999084472656,12.602636337280273 12.602636337280273,22.834999084472656 0,22.834999084472656 C-12.602636337280273,22.834999084472656 -22.834999084472656,12.602636337280273 -22.834999084472656,0 C-22.834999084472656,-1.6959999799728394 -22.649999618530273,-3.3489999771118164 -22.29800033569336,-4.940000057220459">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div class="art-notice">
                                    <div class="art-notice-inner"></div>
                                </div>
                                <div class="art-settings">
                                    <div class="art-setting-inner art-backdrop-filter">
                                        <div class="art-setting-body"></div>
                                    </div>
                                </div>
                                <div class="art-info art-backdrop-filter">
                                    <div class="art-info-title"> 快捷键说明</div>
                                    <div class="art-info-panel">
                                        <ul class="hkvideo-ctxmenuhelp-list">
                                            <li class="hkvideo-ctxmenuhelp-item"><label class="menuhelp-label">
                                                    空格</label><span class="menuhelp-text">: 播放 / 暂停</span></li>
                                            <li class="hkvideo-ctxmenuhelp-item"><label
                                                    class="menuhelp-label">Esc</label><span class="menuhelp-text">:
                                                    退出全屏</span></li>
                                            <li class="hkvideo-ctxmenuhelp-item"><label class="menuhelp-label">
                                                    ↑</label><span class="menuhelp-text">: 音量提高10%</span></li>
                                            <li class="hkvideo-ctxmenuhelp-item"><label class="menuhelp-label">
                                                    ↓</label><span class="menuhelp-text">: 音量降低10%</span></li>
                                            <li class="hkvideo-ctxmenuhelp-item"><label class="menuhelp-label">
                                                    →</label><span class="menuhelp-text">: 单次快进5秒</span></li>
                                            <li class="hkvideo-ctxmenuhelp-item"><label class="menuhelp-label">
                                                    ←</label><span class="menuhelp-text">: 单次快退5秒</span></li>
                                        </ul>
                                    </div>
                                    <div class="art-info-close"><svg class="hkplayer-close"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="14"
                                            height="14">
                                            <path
                                                d="M622.276923 512l378.092308-378.092308c31.507692-31.507692 31.507692-78.769231 0-110.276923-31.507692-31.507692-78.769231-31.507692-110.276923 0L512 401.723077 133.907692 23.630769C102.4-7.876923 55.138462-7.876923 23.630769 23.630769c-31.507692 31.507692-31.507692 78.769231 0 110.276923l378.092308 378.092308-378.092308 378.092308c-31.507692 31.507692-31.507692 78.769231 0 110.276923 31.507692 31.507692 78.769231 31.507692 110.276923 0l378.092308-378.092308 378.092308 378.092308c31.507692 31.507692 78.769231 31.507692 110.276923 0 31.507692-31.507692 31.507692-78.769231 0-110.276923L622.276923 512z">
                                            </path>
                                        </svg></div>
                                </div><!-- 如果开启自定义小窗遮罩，则展现自定义遮罩层 -->
                                <div class="art-mini-header">
                                    <div class="art-mini-title">按住此处可拖拽</div>
                                    <div class="art-close-automini">
                                        <div class="empty-circle"></div>
                                        <div class="close-text"> 不再出现</div>
                                        <div class="close-tip-text"> 可在播放器设置中重新打开小窗播放</div>
                                    </div>
                                    <div class="art-mini-close"><svg width="24px" height="24px" viewBox="0 0 24 24"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="pc" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-452.000000, -36.000000)">
                                                    <g transform="translate(452.000000, 36.000000)">
                                                        <rect fill="#D8D8D8" opacity="0" x="0" y="0" width="24"
                                                            height="24"></rect>
                                                        <g transform="translate(6.000000, 6.000000)" stroke="#FFFFFF"
                                                            stroke-linecap="square" stroke-width="2">
                                                            <line x1="0.609375" y1="0.609375" x2="11.4375" y2="11.4375">
                                                            </line>
                                                            <line x1="0.609375" y1="0.609375" x2="11.4375" y2="11.4375"
                                                                transform="translate(6.000000, 6.000000) scale(-1, 1) translate(-6.000000, -6.000000) ">
                                                            </line>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                </div>
                                <div class="art-contextmenus art-backdrop-filter">
                                    <div class=" art-contextmenu art-contextmenu-info art-control-onlyText"
                                        data-index="30">快捷键说明</div>
                                </div>
                                <div class="mini-replay"><svg class="mini-replay-svg" width="48px" height="48px"
                                        viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <g id="pc" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-246.000000, -112.000000)">
                                                <g transform="translate(246.000000, 112.000000)">
                                                    <rect fill="#D8D8D8" opacity="0" x="0" y="0" width="48" height="48">
                                                    </rect>
                                                    <g transform="translate(11.000000, 12.000000)">
                                                        <path
                                                            d="M1.90388179,16.4754536 C3.65572637,20.8823751 7.97931144,24 13.035401,24 C19.6432666,24 25,18.6750353 25,12.1063584 C25,5.53768157 19.6432666,0.21271686 13.035401,0.21271686 C7.80429176,0.21271686 3.35727692,3.54991445 1.73127921,8.1994671"
                                                            stroke="#FFFFFF" stroke-width="3.34584042"></path>
                                                        <path
                                                            d="M0,0 L3.36799618,0 L3.36799618,8.51055183 C3.36799618,9.44059829 2.61404455,10.1945499 1.68399809,10.1945499 C0.753951625,10.1945499 3.35942447e-16,9.44059829 0,8.51055183 L0,0 L0,0 Z"
                                                            fill="#FFFFFF"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="videoinfo">
                        <div class="videoinfo-text">
                            <div class="videoinfo-playnums">1427次播放&nbsp;|&nbsp;发布时间：2022年3月8日</div>
                            <div class="videoinfo-zan like-0"><i class="icon icon-like"></i>2</div>
                            <div class="videoinfo-collect like-0"><i class="icon icon-collect1"></i>收藏</div>
                            <div class="share">
                                <div class="videoinfo-share"><i class="icon-share icon"></i><span
                                        class="share-share">分享</span></div>
                                <div class="share-hoverbox clear">
                                    <div class="clear share-hoverbox-inner">
                                        <div class="share-wechat float-left">
                                            <h3 class="share-wechat-title">微信扫一扫</h3><canvas height="264" width="264"
                                                style="height: 132px; width: 132px;"></canvas>
                                        </div>
                                        <div class="float-right share-right">
                                            <ul class="share-icon">
                                                <li class="share-icon-item"><svg width="48px" height="48px"
                                                        viewBox="0 0 48 48" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <circle id="Oval" fill="#0AC0FF" cx="24" cy="24" r="24">
                                                            </circle>
                                                            <path
                                                                d="M18.4986298,23.775314 L18.2137181,25.69582 C18.1202526,26.3285934 18.4588957,26.9835525 19.0404588,27.1383698 C19.6920081,27.3115144 20.3282057,26.8504386 20.4311532,26.157378 L20.7300621,24.1399304 C20.7318682,24.1293198 20.7404472,24.1225677 20.7499292,24.1240146 C21.765407,24.2426596 22.8152006,24.3048759 23.8884735,24.3048759 C27.0053447,24.3048759 29.9253514,23.7811015 32.3866095,22.8608792 C32.6728758,22.753327 32.9884912,22.8386935 33.1849042,23.0851472 C33.7177026,23.7536106 34.2292795,24.6434483 34.6379089,25.6721874 C35.6610626,28.2466879 35.6529351,30.713154 34.6198479,31.1814642 C33.8612873,31.5253419 32.7604715,30.6957913 31.8240104,29.210317 C31.8145284,29.1948835 31.7937583,29.2001888 31.7919522,29.2180338 C31.6424977,30.8848517 31.0392614,32.4103565 30.1158945,33.6517886 C30.1073156,33.6628814 30.1140884,33.6792795 30.1271826,33.6821733 C31.4185417,33.9363437 32.2795982,34.3940434 32.2795982,34.9154063 C32.2795982,35.7145722 30.2581246,35.88 27.7643568,35.88 C26.2896789,35.88 24.9798074,35.8221244 24.1557758,35.6094315 C24.1535182,35.6084669 24.1512606,35.6084669 24.149003,35.6094315 C23.3245199,35.8221244 22.0150999,35.88 20.5399705,35.88 C18.0466541,35.88 16.024729,35.7145722 16.024729,34.9154063 C16.024729,34.4475784 16.7173671,34.0318385 17.7910915,33.7675399 C17.8041857,33.7641638 17.8100555,33.748248 17.8019281,33.7366729 C16.8785612,32.5285193 16.2626823,31.0425627 16.0811695,29.4138463 C16.0789119,29.3964836 16.0590449,29.3916606 16.0491113,29.4061295 C15.1415478,30.7676535 14.1048484,31.5099084 13.3801521,31.1814642 C12.3470649,30.713154 12.3389374,28.2466879 13.3620911,25.6721874 C13.7567232,24.6796205 14.2466269,23.8158269 14.7591068,23.1560448 C14.9532622,22.9057328 15.2693291,22.8179547 15.5574015,22.9221309 C16.4753501,23.2563626 17.4551575,23.5351301 18.4837295,23.7531283 C18.4936631,23.7550575 18.4999844,23.7651857 18.4986298,23.775314 M16.024729,20.4903902 L16.024729,19.4968587 C16.024729,14.4684319 19.8807452,10.4224437 24.5725326,10.8280554 C28.6344438,11.1791674 31.8280741,14.8113449 31.8280741,19.2407591 L31.8280741,20.4643462 C31.8280741,20.7980956 31.6303065,21.0990488 31.3327521,21.2012957 C29.1839487,21.9392099 26.6350949,22.3756885 23.8884735,22.3756885 C21.1752649,22.3756885 18.6557602,21.9503027 16.5232117,21.2287867 C16.2238512,21.1275043 16.024729,20.8255865 16.024729,20.4903902"
                                                                fill="#FFFFFF"></path>
                                                        </g>
                                                    </svg>
                                                    <p class="share-icon-title">QQ</p>
                                                </li>
                                                <li class="share-icon-item"><svg width="48px" height="48px"
                                                        viewBox="0 0 48 48" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <circle id="Oval" fill="#FFB400" cx="24" cy="24" r="24">
                                                            </circle>
                                                            <path
                                                                d="M25.8037524,11.6409706 C26.3953902,11.9329613 26.8742728,12.4118438 27.1662635,13.0034817 L29.3033313,17.333654 L34.0819601,18.0280294 C35.7215947,18.2662822 36.8576391,19.7886108 36.6193862,21.4282454 C36.5245127,22.0811565 36.2170512,22.6845837 35.7446003,23.1451095 L32.3218885,26.4809096 C27.0036229,27.22358 23.8646169,27.1574905 23.2716234,26.639809 C23.3475894,26.5590679 23.4621607,26.4589048 23.6142641,26.3460971 C24.0926594,25.9912944 24.6418157,25.6886749 26.0398374,24.9773965 C29.1802618,23.3796273 30.0252098,22.8014668 30.0252098,21.4133874 C30.0252098,19.1170092 26.796071,18.8700429 19.7932216,19.6778121 C19.2174746,19.7442237 18.8045767,20.2647961 18.8709884,20.8405431 C18.9374,21.4162901 19.4579724,21.829188 20.0337194,21.7627763 C22.9935859,21.4213597 25.200617,21.307906 26.6302045,21.4172417 C27.0827261,21.4518508 27.4422016,21.5082362 27.7003683,21.5777991 C27.5986195,21.6662851 27.4705542,21.7640161 27.3170138,21.8690769 C26.8341549,22.1994759 26.3056197,22.4873619 25.0881219,23.1067942 C23.5687988,23.8797877 22.9759932,24.2064607 22.3640157,24.6603349 C21.3646471,25.4015183 20.8507699,26.2139105 21.2006561,27.2100593 C21.9303012,29.2874065 25.579042,29.5793988 32.6365137,28.5628747 L33.1030392,31.2749985 C33.3831222,32.9080079 32.2863587,34.4588757 30.6533494,34.7389587 C30.0030765,34.8504892 29.3341723,34.7445452 28.7501908,34.437528 L24.4760552,32.1904819 L20.2019196,34.437528 C18.7353859,35.2085304 16.9215044,34.6446909 16.150502,33.1781571 C15.8434848,32.5941757 15.7375408,31.9252714 15.8490713,31.2749985 L16.6653586,26.5156786 L13.2075102,23.1451095 C12.0210595,21.9886059 11.9967826,20.0892661 13.1532862,18.9028154 C13.613812,18.4303645 14.2172393,18.1229029 14.8701503,18.0280294 L19.6487792,17.333654 L21.785847,13.0034817 C22.5191139,11.5177207 24.3179914,10.9077037 25.8037524,11.6409706 Z"
                                                                fill="#FFFFFF"></path>
                                                        </g>
                                                    </svg>
                                                    <p class="share-icon-title">QQ空间</p>
                                                </li>
                                                <li class="share-icon-item"><svg width="48px" height="48px"
                                                        viewBox="0 0 48 48" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <circle id="Oval" fill="#FD4C14" cx="24" cy="24" r="24">
                                                            </circle>
                                                            <path
                                                                d="M21.0594237,13.659303 C25.3748515,12.1548424 25.8777667,14.7007036 25.8777667,16.2051642 C25.6480517,17.4819697 25.2188722,18.2317782 26.8391665,17.7173747 C26.8391665,17.7173747 31.0799132,15.7014169 32.824991,17.4897197 C34.2335315,18.9331493 33.0575419,20.9190761 33.0575419,20.9190761 C33.0575419,20.9190761 32.4733285,21.5816975 33.6748419,21.8209774 C34.881082,22.0670386 38.6699614,23.8659976 36.5855105,28.4132854 C34.5001143,32.9518545 27.6228444,35.1615612 22.52752,34.7517822 C17.6845985,34.3613781 11.457715,32.7135433 10.8148912,26.7073259 C10.8148912,26.7073259 10.4745727,23.9870907 13.0477587,20.467641 C13.0477587,20.467641 16.7487226,15.1705448 21.0594237,13.659303 Z M23.5816419,22.0021045 C19.1928344,21.6808392 15.3613841,23.7354067 14.9803988,26.838283 C14.5998397,29.9376875 17.8399369,32.6993047 22.2290642,33.0179661 C26.6198912,33.3430034 30.5104716,30.8675193 30.890924,27.7689827 C31.2710568,24.67305 27.9727886,22.324538 23.5816419,22.0021045 Z M22.4096824,23.76 C25.1329445,23.76 27.3405846,25.5131036 27.3405846,27.6756665 C27.3405846,29.8382293 25.1329445,31.5913329 22.4096824,31.5913329 C19.6864203,31.5913329 17.4787802,29.8382293 17.4787802,27.6756665 C17.4787802,25.5131036 19.6864203,23.76 22.4096824,23.76 Z M21.3139264,25.9975237 C20.4061724,25.9975237 19.6702923,26.7488538 19.6702923,27.6756665 C19.6702923,28.6024791 20.4061724,29.3538092 21.3139264,29.3538092 C22.2216804,29.3538092 22.9575605,28.6024791 22.9575605,27.6756665 C22.9575605,26.7488538 22.2216804,25.9975237 21.3139264,25.9975237 Z"
                                                                fill="#FFFFFF"></path>
                                                        </g>
                                                    </svg>
                                                    <p class="share-icon-title">微博</p>
                                                </li>
                                                <li class="share-icon-item"><svg width="48px" height="48px"
                                                        viewBox="0 0 48 48" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <circle id="Oval" fill="#2B87FF" cx="24" cy="24" r="24">
                                                            </circle>
                                                            <path
                                                                d="M29.372093,13 L29.372,15.389 L34.9558941,15.3890671 L34.9558941,17.6913927 L29.372,17.691 L29.372,22.735 L35,22.7356322 L35,31.3333333 C35,33.3583774 33.3392888,35 31.2906977,35 L31.2906977,35 L24.7674419,35 L24.7674419,22.7356322 L27.069,22.735 L27.0697674,13 L29.372093,13 Z M19.2674419,17.045977 L19.2674419,28.8045977 C19.2674419,30.9425753 20.9991223,32.6807461 23.1516439,32.7233381 L23.2325581,32.7241379 L23.2325581,35 C21.1195897,35 19.2508376,33.9664044 18.1155034,32.3827916 C16.9817205,33.9664044 15.1129684,35 13,35 L13,35 L13,32.7241379 L13.0809143,32.7233381 C15.2334358,32.6807461 16.9651163,30.9425753 16.9651163,28.8045977 L16.9651163,28.8045977 L16.9651163,17.045977 L19.2674419,17.045977 Z M32.6976744,25.0114943 L27.0697674,25.0114943 L27.0697674,32.7241379 L31.2906977,32.7241379 C32.048797,32.7241379 32.6668588,32.1314579 32.6965572,31.3892708 L32.6965572,31.3892708 L32.6976744,31.3333333 L32.6976744,25.0114943 Z M23.2325581,13.1264368 L23.2325581,29.183908 L20.9302326,29.183908 L20.9302326,15.402046 L16.7093023,15.4022989 C15.951203,15.4022989 15.3331412,15.9949789 15.3034428,16.737166 L15.3023256,16.7931034 L15.3023256,29.183908 L13,29.183908 L13,16.7931034 C13,14.7947047 14.6172958,13.1697038 16.6286412,13.1272866 L16.7093023,13.1264368 L23.2325581,13.1264368 Z"
                                                                fill="#FFFFFF"></path>
                                                        </g>
                                                    </svg>
                                                    <p class="share-icon-title">贴吧</p>
                                                </li>
                                            </ul>
                                            <div class="copy-box">
                                                <p class="copy-box-title">将视频贴到博客或论坛</p>
                                                <div class="copy-input"><input type="text"
                                                        class="copy-input-inner inputtext" id="copyinput"
                                                        value="https://haokan.baidu.com/v?vid=11877332515796690602&amp;pd=pcshare">
                                                    <div class="copy-input-btn">复制</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="videoinfo-phone"><i class="icon-phone icon"></i><span
                                        class="share-share">用手机看</span></div>
                                <div class="phone-hoverbox">
                                    <div class="phone-hoverbox-inner"><canvas height="316" width="316"
                                            style="height: 158px; width: 158px;"></canvas>
                                        <div class="phone-right">
                                            <h2 class="phone-right-title">手机扫描二维码观看</h2>
                                            <ul class="phone-right-list">
                                                <li class="phone-right-item">·&nbsp;&nbsp;打开&nbsp;<a
                                                        href="https://haokan.baidu.com/videoui/page/show"
                                                        class="color-red" target="_blank">好看视频APP</a>&nbsp;-我的-左上角扫一扫
                                                </li>
                                                <li class="phone-right-item">·&nbsp;&nbsp;使用其他应用的扫码功能</li>
                                            </ul>
                                            <p class="phone-right-text">锂电手电钻大品牌中可靠耐的推荐给粉丝</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="videoinfo-more feedback"><i class="icon-more1 icon"></i>
                                <div class="feedback-hoverbox"><span class="feedback-hoverbox-inner">举报</span></div>
                            </div>
                        </div>
                        <h1 class="videoinfo-title">锂电手电钻大品牌中可靠耐的推荐给粉丝</h1>
                        <div class="author">
                            <div class="author-main"><a href="https://haokan.baidu.com/author/1658760295710540"
                                    class="author-link" target="_blank"
                                    style="width: 54px; height: 54px; background-image: url(&quot;https://pic.rmb.bdstatic.com/bjh/user/bf5c058ecc43917f2ce9b46a311ee933.jpeg@s_2,w_272,h_272,q_80&quot;);"><i
                                        class="vip vip-0"></i></a></div>
                            <div class="author-detail">
                                <p class="tag-1"><a href="https://haokan.baidu.com/author/1658760295710540"
                                        target="_blank">小尹修工具</a></p>
                                <p class="tag-2"><span>1320粉丝</span></p>
                            </div>
                            <div class="author-follow">
                                <div class="follow-container "><button class="follow-btn followed">已关注</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-right">
                    <div class="page-right-next">
                        <div class="skeletonbg landrightbanner">
                            <div class="landrightbanner-content">
                                <div class="landrightbanner-element" style="display: block;" id="id1646850172450">
                                    <div class="mediago-ad-haokan-rightrail-wrapper mediago-ad-wrapper svelte-xtgbqj"><a
                                            class="mediago-a-tag svelte-xtgbqj" href="javascript:;">
                                            <div class="mediago-img svelte-xtgbqj"
                                                style="background-image: url(&quot;https://s3m1.fenxi.com/galileo/b1f562a72c259f5812c625902ca6af1f.gif&quot;); background-size: 100% 100%;">
                                                <div class="mediago-ad-logo svelte-xtgbqj"><span
                                                        class="mediago-text svelte-xtgbqj">广告</span></div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <h3 class="next-title"><span class="next-title-play">相关推荐</span><span
                                class="next-title-switch">自动播放</span><button type="button" role="switch"
                                aria-checked="false" ant-click-animating="true" class="next-switch ant-switch"><span
                                    class="ant-switch-inner"></span></button></h3>
                        <div class="next">
                            <ul class="next-list">
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=2353816232,3886617670&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=2353816232,3886617670&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">02:29</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">开箱一个大有5283锂电机头，测试一下真的不错，大家看看怎么样</h3>
                                            <p class="land-bottom-author">我是机电哥</p>
                                            <p class="land-bottom-info"><span>2771次播放</span><span> · 23次点赞</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=3147865436,1721867333&amp;fm=222&amp;app=106&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=3147865436,1721867333&amp;fm=222&amp;app=106&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">00:08</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">资讯｜永诺第一支Z口85mmF1.8镜头3月11日上市｜授权转载自影像狗</h3>
                                            <p class="land-bottom-author">酷扯儿</p>
                                            <p class="land-bottom-info"><span>6次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=471794286,3518444897&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=471794286,3518444897&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">00:54</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">你没见过的词典笔，让我们一起来看看它</h3>
                                            <p class="land-bottom-author">南波的好物</p>
                                            <p class="land-bottom-info"><span>2次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=158571510,3007705698&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=158571510,3007705698&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">04:38</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">收了台早期老烧都喜欢的品牌功放，几十年的声音依然完美</h3>
                                            <p class="land-bottom-author">走走魔电门</p>
                                            <p class="land-bottom-info"><span>2647次播放</span><span> · 16次点赞</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=1570526412,612481045&amp;fm=222&amp;app=108&amp;f=PNG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=1570526412,612481045&amp;fm=222&amp;app=108&amp;f=PNG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">00:29</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">通勤好帮手-吕布云轮新升级助力改装套件KF系列</h3>
                                            <p class="land-bottom-author">吕布科技</p>
                                            <p class="land-bottom-info"><span>13次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=1156033644,2758856075&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=1156033644,2758856075&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">03:40</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">发型永久最帅：西伯利亚S300U轻量化后挂式游戏耳机体验</h3>
                                            <p class="land-bottom-author">爱斯机膜神</p>
                                            <p class="land-bottom-info"><span>4次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=1482062325,1501726029&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=1482062325,1501726029&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">02:47</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">10400已经开卖，不耽误9400F销售，满足日常需求为主</h3>
                                            <p class="land-bottom-author">牟远财爱运动</p>
                                            <p class="land-bottom-info"><span>2次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=67992593,298519551&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=67992593,298519551&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">02:57</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">CARVER CM2002功率放大器，150W大功率输出，控制力好韵味足</h3>
                                            <p class="land-bottom-author">搞笑菜青虫</p>
                                            <p class="land-bottom-info"><span>2次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=1788848202,3267839351&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=1788848202,3267839351&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">01:36</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">电动扳手转换手电钻非常好用真没想到</h3>
                                            <p class="land-bottom-author">小尹修工具</p>
                                            <p class="land-bottom-info"><span>4979次播放</span><span> · 26次点赞</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=1786794533,3299823186&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=1786794533,3299823186&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">02:38</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">插电角磨机和锂电角磨机的根本区别</h3>
                                            <p class="land-bottom-author">小尹修工具</p>
                                            <p class="land-bottom-info"><span>2025次播放</span><span> · 14次点赞</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=2189436753,2880946393&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=2189436753,2880946393&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">01:45</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">无刷手电钻和有刷手电钻pk胜负已分</h3>
                                            <p class="land-bottom-author">小尹修工具</p>
                                            <p class="land-bottom-info"><span>6921次播放</span><span> · 43次点赞</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=3601370720,1518254485&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=3601370720,1518254485&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">02:19</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">锂电手电钻开关更换教程</h3>
                                            <p class="land-bottom-author">小尹修工具</p>
                                            <p class="land-bottom-info"><span>1044次播放</span><span> · 6次点赞</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://videopic.bdstatic.com/hk/2203/1646841197826892393f02ea4c45437c6ebdd29c1d163031648.jpg@s_2,w_681,h_381,q_100,f_webp"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/1646841197826892393f02ea4c45437c6ebdd29c1d163031648.jpg@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">01:42</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">音响拿到户外试听，面对户外嘈杂场地，是有一定的难度，看到底音</h3>
                                            <p class="land-bottom-author">小何子HIFI</p>
                                            <p class="land-bottom-info"><span>5次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=1824344604,3996896346&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=1824344604,3996896346&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">00:22</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">永诺标配视251.7吗？</h3>
                                            <p class="land-bottom-author">摄影摄像师</p>
                                            <p class="land-bottom-info"><span>16次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=706488160,2081595062&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=706488160,2081595062&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">03:21</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">闲鱼上品0曝光没有曝光，原来都是有原因的，这些操作最好不做</h3>
                                            <p class="land-bottom-author">小文创业说</p>
                                            <p class="land-bottom-info"><span>2次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=3595372091,2780135026&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=3595372091,2780135026&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">04:12</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">全网最便宜！拼多多26元无线麦克风手机VLOG收音测评体验</h3>
                                            <p class="land-bottom-author">黑猫长二号机</p>
                                            <p class="land-bottom-info"><span>4次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=4057648233,526420252&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=4057648233,526420252&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">10:53</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">显卡清灰换硅脂详细教程与注意事项信越7921如何使用显卡拆解视频</h3>
                                            <p class="land-bottom-author">图吧首穷菜哥</p>
                                            <p class="land-bottom-info"><span>11次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=962111234,2988662719&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=962111234,2988662719&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">02:20</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">高倍清晰长焦相机，拍偷渡者的绝佳神器，漂浮的50万</h3>
                                            <p class="land-bottom-author">中华小钢</p>
                                            <p class="land-bottom-info"><span>29次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=702384472,1093263411&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=702384472,1093263411&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">00:17</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">理想one圣戈班玻璃遁甲</h3>
                                            <p class="land-bottom-author">李同学吱车</p>
                                            <p class="land-bottom-info"><span>87次播放</span></p>
                                        </div>
                                    </a></li>
                                <li class="land-item"><a class="land-item-link" target="_self">
                                        <div class="land-item-top skeletonbg">
                                            <picture>
                                                <source
                                                    srcset="https://f7.baidu.com/it/u=1582096300,2547396678&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_681,h_381,q_100"
                                                    type="image/webp"><img class="video-img"
                                                    src="./details_files/u=1582096300,2547396678&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_454,h_256,q_100">
                                            </picture>
                                            <div class="videotime">03:31</div>
                                        </div>
                                        <div class="land-bottom">
                                            <h3 class="land-bottom-title">千元电竞椅开箱，首席玩家DK2到底怎么样？</h3>
                                            <p class="land-bottom-author">降酱晓学生</p>
                                            <p class="land-bottom-info"><span>10次播放</span></p>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-bottom">
            <div class="page-left">
                <div class="guess">
                    <div class="guess-top">
                        <h2 class="guess-title">猜你喜欢</h2><button class="guess-change default"><i
                                class="icon icon-change"></i><span class="gueaa-change-text">换一换</span></button>
                    </div>
                    <ul class="guess-list">
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=1935634481,189804261&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=1935634481,189804261&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:03:36</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">俄乌交战第8天，日媒要求中国出兵乌克兰？中方一番回应斩钉截铁</h3>
                                    <p class="guess-bottom-info"><span>7.3万次播放</span></p>
                                </div>
                            </a></li>
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=136446292,4099391799&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=136446292,4099391799&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:03:25</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">现在才知道，原来他们都是靠翻唱火的，不愧是乐坛汉化组！</h3>
                                    <p class="guess-bottom-info"><span>291次播放</span></p>
                                </div>
                            </a></li>
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=526987955,2111078523&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=526987955,2111078523&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:00:43</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">马可波罗还能这么玩？</h3>
                                    <p class="guess-bottom-info"><span>1138次播放</span></p>
                                </div>
                            </a></li>
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=614013823,1414526119&amp;fm=222&amp;app=108&amp;f=PNG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=614013823,1414526119&amp;fm=222&amp;app=108&amp;f=PNG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:03:18</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">蒋介石到台湾后，得知吴石竟是中共地下党，在日记里写下这些话</h3>
                                    <p class="guess-bottom-info"><span>987次播放</span></p>
                                </div>
                            </a></li>
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=1733851769,3601125573&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=1733851769,3601125573&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:01:36</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">电镐坏成这样至少都有预兆的学学吧为了减少损失</h3>
                                    <p class="guess-bottom-info"><span>283次播放</span></p>
                                </div>
                            </a></li>
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=146805189,798954271&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=146805189,798954271&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:03:42</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">北约已参战？乌议员爆料乌总统目前身处波兰，泽连斯基连夜辟谣</h3>
                                    <p class="guess-bottom-info"><span>5.9万次播放</span></p>
                                </div>
                            </a></li>
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=2371465904,1886114130&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=2371465904,1886114130&amp;fm=222&amp;app=108&amp;f=JPEG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:00:58</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">李白的大招还能这么玩</h3>
                                    <p class="guess-bottom-info"><span>3.1万次播放</span></p>
                                </div>
                            </a></li>
                        <li class="guess-item"><a class="guess-item-link" target="_self">
                                <div class="guess-item-top skeletonbg">
                                    <picture>
                                        <source
                                            srcset="https://f7.baidu.com/it/u=1373567557,968151974&amp;fm=222&amp;app=108&amp;f=PNG@s_2,w_480,h_270,q_80,f_webp"
                                            type="image/webp"><img class="video-img"
                                            src="./details_files/u=1373567557,968151974&amp;fm=222&amp;app=108&amp;f=PNG@s_2,w_480,h_270,q_80">
                                    </picture>
                                    <div class="videotime">00:02:17</div>
                                </div>
                                <div class="guess-bottom">
                                    <h3 class="guess-bottom-title">二战后，苏联摄影师拍下希特勒死亡影像，双目紧闭躺在废墟中</h3>
                                    <p class="guess-bottom-info"><span>75次播放</span></p>
                                </div>
                            </a></li>
                    </ul>
                </div>
                <div class="comment" id="commentnum">
                    <h3 class="comment-title">评论<span class="comment-title-num">（9）</span></h3>
                    <div class="comment-first"><span class="author-link"
                            style="width: 34px; height: 34px; margin-right: 15px; background-image: url(&quot;https://himg.bdimg.com/sys/portrait/item/wise.1.368d1757.fGbvli2mR8wd9LEYvFjmAw.jpg?time=8218&quot;);"><i
                                class="vip vip-0" style="width: 15px; height: 15px;"></i></span>
                        <div class="area ">
                            <div class="area-top "><textarea class="area-input" placeholder="说说你的看法"
                                    maxlength="500"></textarea>
                                <div class="area-opt">
                                    <div class="area-opt-click"><span class="area-opt-emoji icon-emoji"></span><span
                                            class="area-opt-emojitext">表情</span></div>
                                    <div class="area-opt-right"><span class="font-nums">0/500</span><button
                                            class="area-button" disabled="">回复</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list"></div>
                </div>
            </div>
            <div class="page-right">
                <div class="hotsearch">
                    <h2 class="hotsearch-title">全网热点</h2>
                    <ul class="hotsearch-list">
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E6%9C%AA%E6%88%90%E5%B9%B4%E6%96%87%E8%BA%AB%E4%B8%8D%E6%98%AF%E7%A7%81%E4%BA%8B"
                                class="hotsearch-link"><i class="icon icon-1"></i><span
                                    class="hotsearch-link-text v1">未成年文身不是私事</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">435.5w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E8%AF%AD%E6%96%87%E8%80%83%E8%AF%95%E5%85%81%E8%AE%B8%E7%94%A8%E5%AD%97%E5%85%B8"
                                class="hotsearch-link"><i class="icon icon-2"></i><span
                                    class="hotsearch-link-text v1">语文考试允许用字典</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">422.8w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=12%E7%BB%84%E5%85%B3%E9%94%AE%E8%AF%8D%E8%AF%BB%E6%87%82%E4%B8%A4%E9%AB%98"
                                class="hotsearch-link"><i class="icon icon-3"></i><span
                                    class="hotsearch-link-text v1">12组关键词读懂两高</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">415.8w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E5%88%87%E5%B0%94%E8%AF%BA%E8%B4%9D%E5%88%A9%E5%AE%8C%E5%85%A8%E6%96%AD%E7%94%B5"
                                class="hotsearch-link"><i class="icon icon-4"></i><span
                                    class="hotsearch-link-text v1">切尔诺贝利完全断电</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">394.3w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E8%8B%8F%E7%BF%8A%E9%B8%A3%E8%B0%B7%E7%88%B1%E5%87%8C%E5%AD%A6%E5%86%B2%E6%B5%AA"
                                class="hotsearch-link"><i class="icon icon-5"></i><span
                                    class="hotsearch-link-text v1">苏翊鸣谷爱凌学冲浪</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">376.3w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E9%99%95%E8%A5%BF%E5%A2%9E10%E4%BE%8B%E6%9C%AC%E5%9C%9F%E7%A1%AE%E8%AF%8A"
                                class="hotsearch-link"><i class="icon icon-6"></i><span
                                    class="hotsearch-link-text v1">陕西增10例本土确诊</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">348.3w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E6%83%A9%E6%B2%BB35%E5%B2%81%E5%B0%B1%E4%B8%9A%E6%AD%A7%E8%A7%86"
                                class="hotsearch-link"><i class="icon icon-7"></i><span
                                    class="hotsearch-link-text v1">惩治35岁就业歧视</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">336.9w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E6%89%BF%E8%AF%BA13%E5%A4%A9%E4%BA%86%E6%94%AF%E6%8F%B4%E5%9C%A8%E5%93%AA"
                                class="hotsearch-link"><i class="icon icon-8"></i><span
                                    class="hotsearch-link-text v1">承诺13天了支援在哪</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">303.3w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E4%B8%AD%E6%96%B9%E6%8F%90%E4%BE%9B500%E4%B8%87%E5%85%83%E6%8F%B4%E5%8A%A9"
                                class="hotsearch-link"><i class="icon icon-9"></i><span
                                    class="hotsearch-link-text v1">中方提供500万元援助</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">299.3w</span></a></li>
                        <li class="hotsearch-item"><a
                                href="https://haokan.baidu.com/videoui/page/search?query=%E4%BF%84%E6%95%91%E6%8F%B4%E7%89%A9%E8%B5%84%E8%BF%90%E6%8A%B5%E4%B9%8C"
                                class="hotsearch-link"><i class="icon icon-10"></i><span
                                    class="hotsearch-link-text v1">俄救援物资运抵乌</span><i class="icon-hot v1"></i><span
                                    class="hotsearch-link-nums v1">284.8w</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ec-ads-container adblocktest"></div>
    </div>










</body>

</html>