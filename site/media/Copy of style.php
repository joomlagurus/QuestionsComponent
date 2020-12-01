<?php
/*
    Copyright (C)  2012 Sweta ray.
    Permission is granted to copy, distribute and/or modify this document
    under the terms of the GNU Free Documentation License, Version 1.3
    or any later version published by the Free Software Foundation;
    with no Invariant Sections, no Front-Cover Texts, and no Back-Cover Texts.
    A copy of the license is included in the section entitled 'GNU
    Free Documentation License'
	@license GNU/GPL http://www.gnu.org/copyleft/gpl.html
    Questions for Joomla
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
	Questions for Joomla
	Version 0.0.1
	Created date: Sept 2012
	Creator: Sweta Ray
	Email: admin@extensiondeveloper.com
	support: support@extensiondeveloper.com
	Website: http://www.extensiondeveloper.com
*/
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
$app = JFactory::getApplication();
$params = $app->getParams();
?>
<style>
ul.questions_category {
font-family: Georgia, "Times New Roman", Times, serif;
font-size: <?php echo $params->get('category_text_size_ul', '12px') ?>;
}
ul.questions_category a {
background-repeat: no-repeat;
background-position: right;
padding-right: 5px;
padding-left: 5px;
display: block;
line-height: 20px;
text-decoration: none;
color: <?php echo $params->get('category_color_ul', '#371C1C') ?>;
}
ul.questions_category {
list-style-type: none;
height: auto;
/*width: 663px;*/
margin: auto;
}
li.questions_category_li{
list-style: circle outside; 
color:brown;
}
li.questions_category_li a{
color:<?php echo $params->get('category_color_li', '#371C1C') ?>;
font-size: <?php echo $params->get('category_text_size_li', '12px') ?>;
float: left;
text-indent:<?php echo $params->get('sub_cat_text_indent', '10px') ?>;
}
ul.questions_category a:hover {
color: <?php echo $params->get('category_color_onhover', '#FFF') ?>;
}
#tabs1 {
overflow: hidden;
zoom: 1;
position:relative;
margin:0px;
float:left;
}
#tabs1 li {
display: block;
list-style: none;
margin: 0;
padding: 0;
float: left;
border:solid 1px;
}
#tabs1 li a {
display: block;
padding: 2px 5px;
border: 2px solid #ccc;
border-bottom: 0 none;
text-align: center;
}
.tabs-section {
min-height:300px;
min-width:500px;
padding: 10px;
border: 2px solid #ccc;
}

#tabs2 {
overflow: hidden;
zoom: 1;
}
#tabs2 li {
display: block;
list-style: none;
margin: 0;
padding: 0;
float: left;
}
#tabs2 li a {
display: block;
padding: 2px 5px;
border: 2px solid #ccc;
border-bottom: 0 none;
text-align: center;
}
.unanswered strong {
    background: transparent;
    color: #9A4444!important;
}
.peer1 {
    background-image: url("images/sprites.png?v=3");
    background-position: -167px -153px;
    display: inline-block;
    height: 31px;
    width: 72px;
}
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
font,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
fieldset,
form,
label,
legend{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}
blockquote,
q { quotes: none }
blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none;
}
ins { text-decoration: none }
del { text-decoration: line-through }
table {
    border-collapse: collapse;
    border-spacing: 0;
}
code {
    font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
    background-color: #eeeeee;
}
textarea {
    font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
    border: 1px solid #999;
    font-size: 90%;
}
.form-submit input:hover { cursor: pointer }
input,
select,
button {
    border: 1px solid #999;
    font-size: 100%;
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
}
input {
    margin: 5px 0px 5px 0px;
    padding: 3px;
}
pre {
    padding: 5px;
    font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
    margin-bottom: 10px;
    background-color: #eeeeee;
    overflow: auto;
    width: auto;
    width: 650px !ie7;
    padding-bottom: 20px !ie7;
    max-height: 600px;
}
.post-text pre>code:first-child,
#wmd-preview pre>code:first-child {
    max-height: 600px\9;
    display: block\9;
}
pre { max-height: none\9 }
blockquote {
    margin-bottom: 10px;
    padding: 10px 10px 1px 10px;
    background-color: #eeeeee;
}
b,
strong { font-weight: bold }
i,
em { font-style: italic }
p {
    clear: both;
    margin-bottom: 1em;
}
a {
    color: #0077cc;
    text-decoration: none;
    cursor: pointer;
}
a:hover { text-decoration: underline }
a:visited { color: #4a6b82 }
h1 {
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    font-weight: bold;
    font-size: 170%;
    margin-bottom: 7px;
}
h2 {
    color: #9B6E67;
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    font-size: 140%;
    font-weight: bold;
    margin-bottom: 7px;
}
h3 {
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    font-size: 110%;
    font-weight: bold;
    margin-bottom: 5px;
}
hr {
    border: 0;
    color: #aaa;
    background-color: #aaa;
    height: 1px;
    margin-bottom: 20px;
}
sup {
    font-size: 80%;
    position: relative;
    top: -0.4em;
}
sub {
    position: relative;
    top: 0.3em;
    font-size: 80%;
}
kbd {
    padding: 2px 4px;
    white-space: nowrap;
    color: #000;
    background: #eee;
    border-width: 1px 3px 3px 1px;
    border-style: solid;
    border-color: #ccc #aaa #888 #bbb;
}
input[type=checkbox],
input[type=radio] { border: none }
p code { padding: 1px 5px 1px 5px }

.comment-text code { padding: 1px 5px 1px 5px }
.dno { display: none }
.date {
    text-align: right;
    width: 70px;
    height: 35px;
    white-space: nowrap;
    font: normal 28px sans-serif;
    letter-spacing: -2px;
    color: #ccc;
    line-height: 35px;
}
.date_brick {
    float: right;
    height: 30px;
    width: 45px;
    background-color: #eee;
    color: #999;
    font: Bold 12px Verdana,Sans-Serif;
    text-align: center;
    line-height: 12px;
    margin-left: 10px;
    padding-top: 5px;
    letter-spacing: 0px;
    overflow: hidden;
}
.revcell1 {
    width: 25px;
    cursor: pointer;
    text-align: right;
}
.revcell2 {
    width: 50px;
    cursor: pointer;
    font-size: 250%;
    font-weight: bold;
    color: #777;
    text-align: left;
}
.revcell3 {
    vertical-align: middle;
    width: 660px;
    padding-top: 8px;
}
.revcell4 {
    padding: 5px;
    width: 185px;
}
.revcell5 {
    margin-top: 10px;
    margin-left: 15px;
    width: 800px;
}
.mini-counts {
    height: 25px;
    font-size: 190%;
    font-weight: bold;
}
.vt { vertical-align: top }
.vm { vertical-align: middle }
.fw { width: 100% }
.votecell {
    width: 60px;
    vertical-align: top;
}
#answers {
    clear: both;
    padding-top: 10px;
    width: 730px;
}
#answers .subheader { margin-bottom: -10px }
.answer {
    border-bottom: 1px solid #aaa;
    width: 730px;
    padding-bottom: 20px;
    padding-top: 20px;
}
.post-signature {
    padding-left: 5px;
    padding-top: 2px;
    text-align: left;
    vertical-align: top;
    width: 175px;
    height: 58px;
}
.accept-rate {
    margin-left: 37px;
    padding-top: 6px !ie7;
    margin-top: 3px;
    margin-bottom: 6px;
}
.owner { background-color: #e0eaf1 }
.share-tip {
    -moz-box-shadow: 2px 2px 4px #999999;
    -webkit-box-shadow: 2px 2px 4px #999999;
    box-shadow: 2px 2px 4px #999999;
    background-color: #eaeaea;
    margin-top: 5px;
    font-size: 12px;
    max-width: 500px;
    overflow: auto;
    padding: 10px;
    position: absolute;
    z-index: 100;
}
.deleted-answer { background-color: #e3d9d9 }
.downvoted-answer { color: #888 }
.item-multiplier {
    font-size: 120%;
    font-weight: bold;
    margin-right: 4px;
    color: #444;
}
.reputation-score {
    font-weight: bold;
    color: #444;
    font-size: 120%;
    margin-right: 2px;
}
.relativetime {
    font-weight: bold;
    padding: 10px;
    text-decoration: none;
}
#notify-container {
    font-size: 130%;
    font-weight: bold;
    text-align: center;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 0;
    z-index: 100;
    color: #735005;
}
#notify-container div {
    background-color: #F4A83D;
    border-bottom: 1px solid #D6800C;
    padding: 7px 0;
}
#notify-container a {
    text-decoration: underline;
    color: #735005;
}
#notify-container span.notify-close {
    background-color: #FAD163;
    float: right;
    margin-right: 20px;
    border: 2px solid #735005;
    padding-left: 4px;
    padding-right: 4px;
    text-decoration: none;
    display: block;
    cursor: pointer;
}
#notify-container span.notify-close a { text-decoration: none }
.summaryinfo {
    color: #808185;
    text-align: center;
}
.summarycount {
    text-align: center;
    color: #808185;
    font-size: 150%;
    font-weight: bold;
}
.lsep {
    margin: 0px 2px 0px 2px;
    color: #ccc;
    font-size: 110%;
}
.post-taglist {
    margin-bottom: 10px;
    clear: both;
}
.post-menu { padding-top: 2px }
.post-menu>a,
.edit-tags-wrapper>span>a {
    padding: 0px 3px 2px 3px;
    color: #888888;
}
.post-menu>a:hover,
.edit-tags-wrapper>span>a:hover {
    background-color: #777777;
    color: #fff;
    text-decoration: none;
}
.edit-tags-wrapper { padding-right: 40px }
.edit-tags-wrapper>a.post-tag { margin-right: 6px }
.post-menu .lsep {
    margin: 0px;
    padding: 0px;
}
.comments {
    width: 660px;
    border-top: dotted 1px #aaa;
    margin-top: 10px;
    padding-bottom: 10px;
    line-height: 135%;
    color: #444;
}
.comments>table { width: 100% }
.comments-link {
    padding: 0px 3px 2px 3px;
    color: #888;
}
.comments-link:hover {
    padding: 0px 3px 2px 3px;
    background-color: #777;
    color: #fff;
    text-decoration: none;
}
tr.comment>td {
    padding-top: 5px;
    padding-bottom: 5px;
    border-bottom: dotted 1px #ddd;
}
tr.comment-hover { background-color: #fafafa }
.comment img { vertical-align: middle }
.comment-flag,
.comment-up,
.comment-delete {
    visibility: hidden;
    cursor: pointer;
}
.comment-actions {
    padding-left: 3px;
    width: 15px;
}
.comment-score span {
    font-size: 110%;
    color: #666666;
    font-weight: bold;
    padding-right: 2px;
}
.comment-text,
.comment-form {
    vertical-align: text-top;
    padding: 0px 6px 0px 7px;
}
.comment-text .comment-edited {
    vertical-align: top;
    margin-top: 3px;
    margin-left: 2px;
}
a.comment-user {
    white-space: nowrap;
    padding: 0;
}
a.comment-user.owner { padding: 2px 5px 2px 5px }
.comment-date { color: #999 }
.comment-edit-hide { visibility: hidden }
.comment-form>form>table {
    text-align: left;
    margin-top: 5px;
    margin-right: 5px;
    vertical-align: top;
}
.comment-form>form>table td { vertical-align: top }
.comment-form>form input {
    margin-left: 10px;
    margin-top: 1px;
    width: 100px;
    display: block;
    cursor: pointer;
}
.comment-form .edit-comment-cancel,
.comment-form .comment-help-link { margin-left: 10px }
.comment-form>form textarea {
    margin-bottom: 4px;
    height: 5em;
}
.text-counter { margin-right: 20px }
.accept-answer-link {
    font-weight: bold;
    color: #508850 !important;
}
.deleted-post {
    color: #B65454 !important;
    font-weight: bold !important;
}
.deleted-post:hover {
    color: #fff !important;
    background-color: #B65454 !important;
}
.deleted-answer-info {
    color: #b65454;
    margin-top: 10px;
    margin-left: 3px;
}
.search-highlight {
    color: #333;
    background-color: #FFFFCC;
    font-weight: bold;
}
.page-description {
    color: #333;
    font-size: 120%;
    margin: 0 1.2em 0.5em 0;
    line-height: 120%;
}
#footer {
    color: #444;
    background: #efe2ac;
    border-top: 7px solid #dbdbdb;
    clear: both;
    padding: 15px;
    margin-top: 30px;
}
#footer-menu {
    color: #999;
    float: left;
    font-size: 100%;
    line-height: 30px;
    width: 820px;
}
#footer-menu a { color: #9B6E67 }
#footer-sites {
    line-height: 20px;
    padding-bottom: 10px;
}
#svnrev { margin-top: 5px }
#copyright {
    color: #444444;
    clear: both;
}
#copyright a {
    color: #444444;
    text-decoration: underline;
}
.content-page {
    color: #333;
    font-size: 120%;
    line-height: 125%;
    margin-bottom: 15px;
}
.content-page h2 {
    margin-bottom: 10px;
    font-size: 120%;
}
.user-list {
    margin-right: 10px;
    width: 225px;
    height: 21px;
    float: left;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
}
.user-name {
    float: left;
    width: 125px;
}
.user-flair { float: left }
.user-info {
    height: 35px;
    width: 185px;
}
.user-info .user-gravatar32 {
    float: left;
    width: 32px;
    height: 32px;
}
.user-info .user-action-time {
    margin-top: 2px;
    margin-bottom: 4px;
}
.user-info .user-details {
    float: left;
    margin-left: 5px;
    width: 145px;
    overflow: hidden;
    white-space: nowrap;
}
.user-details {
    color: #888;
    line-height: 17px;
}
#revisions {
    margin-top: 20px;
    margin-left: 20px;
}
.revision td { background-color: #eee }
.vote-revision td { background-color: #ddd }
.owner-revision td { background-color: #e0eaf1 }
.revision-comment {
    color: #333;
    background-color: #ffffcc;
    padding: 3px;
    line-height: 1.4;
}
.openid-identifier {
    background: url(../img/openid-large.png) center left no-repeat;
    padding-left: 32px;
    height: 22px;
    line-height: 22px;
}
#answers-header {
    width: 730px;
    margin-top: 10px;
    margin-bottom: 10px;
}
#question-header {
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    width: 940px;
    margin-bottom: 20px;
    margin-top: 20px;
    border-bottom: 1px solid #555555;
}
#question-header a { color: #000000 }
#question-header h1 { font-size: 180% }
#user-about-me {
    border: none;
    background-color: #eeeeee;
    line-height: 120%;
    padding: 10px;
    margin: 10px;
    height: 225px;
    overflow: auto;
    word-wrap: break-word;
    width: 380px;
}
.answer-votes {
    color: #555;
    text-align: center;
    background-color: #eeeeee;
    float: left;
    font-weight: bold;
    padding: 4px;
    padding-bottom: 5px;
    width: 22px;
    height: 15px;
    text-decoration: none;
    font-size: 110%;
}
.answer-hyperlink {
    color: #555 !important;
    font-weight: bold;
}
.question-hyperlink { font-weight: bold }
.answer-link {
    float: left;
    width: 700px;
    margin-top: 5px;
    padding-left: 10px;
    color: #555;
}
.answer-link a { font-weight: bold }
.answer-summary {
    padding: 3px;
    clear: both;
}
.user-details td {
    color: Black;
    padding: 4px 0px 4px 0px;
}
.bounty-indicator,
.bounty-indicator-tab,
.bounty-award {
    color: #fff !important;
    background-color: #0077dd;
    font-size: 90%;
    font-weight: bold;
    margin-right: 5px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}
.bounty-indicator-tab {
    display: inline-block;
    padding: 0px 4px;
    margin-left: -4px;
}
.bounty-indicator { float: left }
.bounty-indicator,
.bounty-award { padding: 2px 5px 2px 4px }
.bounty-award {
    display: inline !important;
    margin: 0px !important;
    cursor: default;
}
.bounty-award-container {
    margin-top: 13px;
    width: 58px;
}
.bounty-vote { cursor: pointer !important }
.bounty-vote-off { background-color: #9dcdf6 !important }
.bounty { background-color: #eee }
.question-status {
    margin-top: 15px;
    margin-bottom: -5px;
    width: 657px;
    background-color: #eee;
    line-height: 150%;
    padding: 8px 8px 1px 60px;
    clear: both;
}
.question-status h2 {
    font-size: 150%;
    line-height: 125%;
    margin-bottom: 4px;
}
.answer-title { color: #bbb }
.answer-title:visited { color: #bbb }
.history-table {
    margin-bottom: 10px;
    line-height: 125%;
}
.history-table span.revision-comment { line-height: 180% }
.history-table .comments { border-top: none }
.history-table td { padding: 0px 5px 5px 0px }
.history-table p {
    margin-bottom: 10px;
    margin-top: 3px;
}
#noscript-warning {
    font-family: sans-serif;
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    z-index: 101;
    text-align: center;
    font-weight: bold;
    font-size: 120%;
    color: #fff;
    background-color: #AE0000;
    padding: 5px 0px 5px 0px;
}
#noscript-padding { padding-top: 3.5em }

#custom-header {
    background-color: #eee;
    height: 31px;
    margin-bottom: -31px;
}
#hsearch { margin-right: -4px !important }
#hsearch .textbox {
    color: #000;
    margin: 0px;
    width: 200px;
    max-width: 200px;
    border: none;
    border-top: 1px solid #ccc;
    border-left: 1px solid #ccc;
}
#hsearch .textbox.mod {
    width: 180px;
    max-width: 180px;
}
#header {
    height: 120px;
    margin: 0 auto;
    padding-bottom: 15px !ie7;
}
#headerContainer {
    width: 960px;
    margin: 0 auto;
}
#header #topbar {
    width: auto;
    padding: 3px 10px 0px 10px;
    float: right;
    height: 30px;
    line-height: 22px;
}
#header #hlogo {
    height: 61px;
    width: 250px;
    float: left;
    margin-top: 10px;
}
#header #hmenus {
    width: 705px;
    float: left;
    padding: 34px 0px 20px 5px;
    margin-top: 10px;
}
#header #topbar #hlinks {
    float: left;
    margin: 0px 35px 0px 0px;
}
#hlinks { margin-right: 20px !important }
#hlinks a { font-weight: bold }
.hlinks-drop-down { cursor: pointer }
.hlinks-drop-down:hover a { text-decoration: underline }
span.drop-down-link {
    color: #444;
    position: relative;
    top: -1px;
    font-size: 80%;
}
#header #topbar #hsearch { float: left }
#system-message {
    clear: both;
    text-align: center;
    margin: 0px 0px 10px 0px;
    padding: 7px;
    font-weight: bold;
    color: #735005;
    background-color: #ffefc6;
}
#system-message a {
    color: #735005;
    text-decoration: underline;
}
.nav {
    padding-left: 50px;
    float: left;
    font-size: 125%;
}
.nav ul { margin: 0 }
.nav li {
    background: #8eb94b;
    display: block;
    float: left;
    margin-right: 7px;
}
.nav .youarehere { background: #ff9900 }
.youarehere a { color: #fff }
.nav li:hover { background-color: #ff9900 }
.nav a {
    color: #fff;
    display: block;
    font-weight: bold;
    padding: 6px 12px 6px 12px;
    text-decoration: none;
}
.askquestion { float: right }
#nav-askquestion { margin-right: 0px }
#sidebar {
    overflow: hidden;
    float: right;
    margin-bottom: 60px;
    width: 220px;
}
#mainbar {
    float: left;
    margin-bottom: 40px;
}
#feed-link {
    text-align: right;
    float: right;
    clear: both;
    margin-bottom: 15px;
    white-space: nowrap;
}
#feed-link a { color: #777 }
#feed-link-text { float: left }
.subheader {
    /*border-bottom: 1px solid #666666;*/
    height: 34px;
    clear: both;
    margin-bottom: 15px;
}
.subheader h1,
.subheader h2 {
    color: #9B6E67;
    float: left;
    font-size: 170%;
    line-height: 34px;
    margin-bottom: 0px;
}
.subheader a { color: #000000 }
#tabs {
    float: right;
    font-weight: bold;
}
#tabs a {
    background: inherit;
    border: 1px solid #fff;
    color: #777;
    display: block;
    float: left;
    font-size: 90%;
    height: 24px;
    line-height: 22px;
    margin: 8px 8px 0 0;
    padding: 0 11px 0 11px;
    text-decoration: none;
}
#tabs a:hover {
    background: #fff;
    border: 1px solid #777;
    border-bottom-color: #fff;
    line-height: 20px;
    margin-top: 9px;
}
#tabs a.youarehere {
    background: #fff;
    border: 1px solid #777;
    border-bottom-color: #ffffff;
    color: black;
    font-size: 120%;
    height: 30px;
    line-height: 28px;
    margin-top: 3px;
    padding: 0px 11px 0px 11px;
}
.subtabs {
    width: 100%;
    float: right;
    font-weight: bold;
}
.subtabs a {
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    border: 1px solid #ccc;
    color: #808185;
    display: block;
    float: right;
    font-size: 120%;
    margin-right: 3px;
    padding: 2px 4px 4px;
    text-decoration: none;
}
.subtabs a.youarehere {
    background-color: #808185;
    border: 1px solid #808185;
    color: #fff;
    font-weight: bold;
}
.question-summary {
    border-bottom: 1px dotted #999;
    overflow: hidden;
    padding: 11px 0px;
    width: 730px;
    float: left;
}
#question {
    clear: both;
    width: 730px;
}
#questions {
    clear: both;
    width: 730px;
    float: left;
    margin-top: -10px;
}
.stats {
    background: #eee;
    margin: 0 0 0 7px;
    padding: 4px 7px 6px 7px;
    width: 58px;
}
.statscontainer {
    width: 86px;
    float: left;
    margin-right: 8px;
}
.narrow .stats {
    background: none;
    margin: 0 0 0 7px;
    padding: 0;
    width: auto;
    height: 48px;
    float: left;
}
.votes {
    color: #555555;
    padding: 0 0 7px 0;
    text-align: center;
}
.narrow .votes {
    background: transparent;
    float: left;
    margin: 0 3px 0 0;
    padding: 5px;
    width: 38px;
    height: 38px;
}
.vote-count-post {
    display: block;
    font-size: 240%;
}
.vote-up,
.vote-down {
    display: block;
    margin: 0 auto;
}
.vote-count-separator {
    border-top: 1px solid silver;
    width: 30px;
    margin-left: 15px;
}
.views {
    padding-top: 4px;
    color: #999;
    text-align: center;
}
.cool { color: #999 !important }
.warm { color: #9b764f !important }
.hot { color: #cf7721 !important }
.hotbg {
    color: #fff !important;
    background-color: #cf7721 !important;
}
.supernova { color: #fe7a15 !important }
.supernovabg {
    color: #fff !important;
    background-color: #fe7a15 !important;
}
.narrow .views {
    float: left;
    margin: 0 7px 0 0;
    padding: 5px 0px 5px 4px;
    width: 40px;
    height: 38px;
}
.views strong { display: block }
.status {
    margin-top: -3px;
    padding: 4px 0 4px;
    text-align: center;
}
.narrow .status {
    float: left;
    margin: 0 3px 0 0;
    padding: 5px;
    width: 48px;
    height: 38px;
}
.status strong {
    color: #ffffff;
    display: block;
    font-size: 140%;
}
.answered {
    background: #75845C;
    color: #ffffff;
}
.answered-accepted {
    background: #75845C;
    color: #E1E818;
    color: #e1e818;
}
.answered-accepted strong {
    color: #E1E818;
    background: #75845C;
}
.unanswered {
    background: transparent;
    color: #9A4444;
    color: #9a4444;
}
.summary {
    float: left;
    width: 635px;
}
.excerpt .started {
    float: right;
    width: 185px;
    height: 55px;
    margin-top: 5px;
}
.excerpt .tags {
    width: 410px;
    margin-top: 5px;
}
.summary h3 { font-size: 130% }
.narrow .summary { width: 550px }
.excerpt {
    line-height: 1.2;
    padding: 0;
    margin: 0;
    padding-bottom: 5px;
}
.excerpt p { margin-bottom: 3px }
.tags {
    line-height: 18px;
    float: left;
}
.tags a:hover { text-decoration: none }
.started-link,
.started-link:visited { color: #999 }
.started {
    width: 185px;
    color: #999;
    float: right;
    line-height: 18px;
}
.narrow .started {
    width: auto;
    line-height: inherit;
    padding-top: 4px;
    white-space: nowrap;
}
.started img { vertical-align: baseline }
.started .reputation-score { margin-left: 1px }
.mod-flair {
    color: #0077cc;
    margin-left: 3px;
    font-weight: bold;
    font-size: 140%;
}
.module {
    color: #444;
    padding: 0 8px 2px 8px;
    margin-bottom: 10px;
}
.module p.label-key {
    color: #444;
    margin-bottom: 0;
}
.module p.label-value {
    color: #444;
    font-size: 140%;
    font-weight: bold;
}
.module .spacer { margin-bottom: 8px }
.module h4 {
    color: #9B6E67;
    line-height: 1.4;
    font-size: 130%;
    padding-bottom: 7px;
}
.newuser {
    background-color: #f4f4f4;
    color: #735005;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    padding-top: 8px;
}
.newuser h4 { color: #AE0000 }
.newuser a {
    font-weight: bold;
    text-decoration: underline;
    color: #735005;
    text-decoration: underline;
}
.module p {
    font-size: 120%;
    line-height: 1.3;
    margin-bottom: 0.5em;
}
.module ul {
    margin-left: 15px;
    list-style-type: square;
    font-size: 120%;
    margin-right: 30px;
    line-height: 120%;
}
.module li { margin-bottom: 4px }
.vote { text-align: center }
.vote span {
    display: block;
    color: #808185;
    font-weight: bold;
}
.favoritecount {
    text-align: center;
    color: #808185;
}
.favoritecount-selected { color: #D4A849 }
.favorites-count,
.favorites-count-off {
    width: 32px;
    text-align: center;
    color: #D4A849;
    margin-top: 13px;
    float: left;
}
.favorites-count-off { color: #919191 }
.post-text {
    width: 660px;
    font-size: 107%;
    margin-bottom: 5px;
    margin-right: 5px;
    line-height: 130%;
}
.post-text h1,
.post-text h2,
.post-text h3 { margin-bottom: 1em }
.post-text p { word-wrap: break-word }
.post-text hr {
    background-color: #ddd;
    color: #ddd;
}
#wmd-preview img { max-width: 640px }
#wmd-preview h1,
#wmd-preview h2,
#wmd-preview h3 { margin-bottom: 1em }
.post-text img { max-width: 640px }
.spoiler { color: #eeeeee }
.spoiler a {
    color: #eeeeee;
    border-color: #eeeeee;
}
.spoiler:hover * { color: black }
.spoiler:hover * a {
    color: #0077cc;
    border-color: black;
}
.form-item { padding: 10px 0px 15px 0px }
.form-submit {
    padding: 10px 0px 15px 0px;
    display: block;
}
.form-submit input {
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    font-size: 130%;
    font-weight: bold;
    border: 1px solid #888;
    padding: 2px;
    margin: 3px;
}
.form-item label {
    display: block;
    font-size: 115%;
    font-weight: bold;
    color: #333;
    padding-bottom: 3px;
}
span.form-error {
    color: #990000;
    font-weight: bold;
    margin-left: 5px;
    font-size: 90%;
}
div.form-error {
    color: #990000;
    font-weight: bold;
    font-size: 130%;
}
.edit-field-overlay { display: none }
.edit-field-overlayed { color: #888 }
#post-editor { width: 660px }
.community-option {
    float: right;
    color: #888;
    font-weight: normal;
    font-size: 90%;
    height: 32px;
}
.community-option input,
.community-option label { vertical-align: middle }
#edit-block { display: none }
.pager {
    margin-top: 20px;
    margin-bottom: 20px;
}
.page-sizer {
    margin-top: 20px;
    margin-bottom: 20px;
}
.page-numbers {
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    border: 1px solid #ccc;
    color: #808185;
    display: block;
    float: left;
    font-size: 130%;
    margin-right: 3px;
    padding: 4px 4px 3px;
    text-decoration: none;
}
.page-numbers.desc { border: none }
.page-numbers:hover { text-decoration: none }
.page-numbers.next,
.page-numbers.prev { border: 1px solid #fff }
.page-numbers.current {
    background-color: #808185;
    border: 1px solid #808185;
    color: #fff;
    font-weight: bold;
}
.page-numbers.dots { border: 1px solid #fff }
.error-notification {
    z-index: 1;
    cursor: pointer;
    display: none;
    position: absolute;
    padding: 15px;
    -moz-box-shadow: 2px 2px 5px #000000;
    -webkit-box-shadow: 2px 2px 5px #000000;
    box-shadow: 2px 2px 5px #000000;
}
.error-notification a {
    color: inherit;
    text-decoration: underline;
}
.error-notification li {
    font-size: 110%;
    padding-top: 3px;
}
.system-alert {
    color: #fff;
    background-color: #ae0000;
    padding: 5px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 5px;
}
.system-alert a {
    color: #fff;
    text-decoration: underline;
}
.popup {
    background-color: #fff;
    border: solid 10px #ae0000;
    -moz-box-shadow: 2px 2px 5px #000000;
    -webkit-box-shadow: 2px 2px 5px #000000;
    box-shadow: 2px 2px 5px #000000;
    z-index: 6;
    display: none;
    position: absolute;
    padding: 15px;
}
.edit-tags { padding: 5px 0 0 15px }
.flag-menu {
    width: 22em;
    cursor: default;
}
.flag-reasons { padding: 10px 0px 15px 15px }
.flag-reasons input,
.close-reasons input {
    border: none;
    cursor: pointer;
}
.flag-reasons label {
    margin-left: 0.5em;
    cursor: pointer;
}
.close-reasons tr td:last-child {
    cursor: pointer;
    padding-left: 0.5em;
}
.close-reasons span.close-reason { font-weight: bold }
.close-reasons li td.close-desc {
    color: #666;
    padding-top: 2px;
    padding-bottom: 8px;
    line-height: 130%;
}
.flag-reasons textarea {
    margin-top: 4px;
    margin-bottom: 4px;
}
.flag-comment {
    margin-top: 15px;
    display: none;
}
.flag-cancel,
.close-cancel {
    cursor: pointer;
    float: left;
    font-size: 110%;
    font-weight: bold;
}
.flag-submit,
.close-submit-container { float: right }
.flag-submit,
.close-submit {
    cursor: pointer;
    font-size: 110%;
    font-weight: bold;
}
.close-submit-container tbody tr td:first-child {
    padding-right: 20px;
    font-size: 110%;
}
.close-submit-container tbody tr td:first-child span.bounty-indicator-tab {
    padding-top: 4px;
    padding-bottom: 4px;
}
.close-reasons li { list-style-type: none }
.existing-linked-questions { margin: 27px 0px 10px 0px }
.existing-linked-questions p {
    color: #333;
    font-weight: bold;
}
.existing-linked-questions li {
    list-style: none;
    margin-bottom: 7px;
    padding-left: 20px;
}
.existing-linked-questions a { padding-left: 3px }
.selected-master-preview { margin-top: 10px }
.post-tag,
.post-text .post-tag,
#wmd-preview a.post-tag {
    color: #3E6D8E;
    background-color: #E0EAF1;
    border-bottom: 1px solid #3E6D8E;
    border-right: 1px solid #7F9FB6;
    padding: 3px 4px 3px 4px;
    margin: 2px 2px 2px 0;
    text-decoration: none;
    font-size: 90%;
    line-height: 2.4;
    white-space: nowrap;
}
.post-tag:hover,
.post-text .post-tag:hover,
#wmd-preview a.post-tag:hover {
    background-color: #3E6D8E;
    color: #E0EAF1;
    border-bottom: 1px solid #37607D;
    border-right: 1px solid #37607D;
    text-decoration: none;
}
.badge,
.badge-tag {
    color: #fff !important;
    background-color: #8EB94B;
    border: 1px solid #8EB94B;
    margin: 0 3px 3px 0;
    padding: 0px 6px 0px 3px;
    display: inline-block;
    text-decoration: none;
    line-height: 1.9;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
}
.badge:hover,
.badge-tag:hover {
    border: 1px solid #555;
    background-color: #555;
    text-decoration: none;
}
.badge-tag:hover {
    color: #fff !important;
    border: 2px solid #555;
}
.badge-tag {
    color: #333 !important;
    border: 2px solid #333;
    background-color: #eee;
}
.badgecount {
    padding-left: 1px;
    color: #808185;
}
.diff-delete {
    text-decoration: line-through;
    color: #A82400;
    background-color: #E5BDB2;
}
.diff-add {
    background: #D1E1AD;
    color: #405A04;
}
.tagged-ignored {
    background-color: #fff;
    opacity: 0.5;
    filter: alpha(opacity=50);
}
.tagged-ignored-hidden { display: none }
.tagged-interesting { background-color: #ffefc6 }
#interestingAdd,
#ignoredAdd {
    margin-left: 5px;
    height: 27px;
}
#interestingTag,
#ignoredTag { height: 19px }
.everyonelovesstackoverflow { margin-bottom: 8px }
.welovestackoverflow {
    padding: 5px;
    color: #333;
    line-height: 130%;
    overflow: hidden;
    margin-bottom: 8px;
    border: 3px solid #eee;
}
.ask-mainbar { width: 660px !important }
.ask-sidebar { width: 270px !important }
.ask-title {
    margin-bottom: -15px;
    margin-top: -10px;
}
.ask-title-table { width: 668px }
.ask-title-field { width: 610px }
.ask-title-cell-key { width: 50px }
.ask-title-cell-value { padding-left: 5px }
#question-suggestions {
    width: 665px;
    overflow: hidden;
}
.tagged {
    margin-bottom: 10px;
    margin-top: 5px;
}
.related {
    line-height: 120%;
    font-size: 90%;
}
.linked {
    line-height: 120%;
    font-size: 90%;
}
.cbt { clear: both }
.orcell {
    vertical-align: middle;
    padding: 0px 40px 0px 40px;
}
.orword {
    position: absolute;
    margin-top: 40px;
    background-color: white;
    margin-left: -10px;
    padding: 5px;
}
.orline {
    width: 1px;
    border-left: solid 1px #999;
    height: 8em;
    margin: auto;
}
.space { padding-top: 20px }
.fl { float: left }
.fr { float: right }
#question-mini-list {
    overflow: auto;
    margin-top: -10px;
    margin-bottom: 30px;
}
.tag-col { width: 184px }
.sponsor-tag-img {
    vertical-align: text-top;
    padding-right: 4px;
}
.cp { cursor: pointer }
.ar { text-align: left }
.al { text-align: left }
.accept-reminder {
    clear: both;
    margin-left: 195px;
    padding-top: 5px;
    color: maroon;
}
.favorite-cell {
    width: 32px;
    height: 45px;
    float: left;
}
#scroller { margin-top: 5px }
#tagnames { width: 660px }
#notify-options { margin-bottom: 20px }
#notify-email-address { width: 260px }
.dingus { font-size: 80% }
.pager-answers {
    padding-top: 10px;
    overflow: hidden;
}
.footerwrap {
    margin: 0 auto;
    text-align: left;
    width: 960px;
}
.ac_results {
    padding: 0px;
    border: 1px solid #777;
    background-color: #fff;
    overflow: hidden;
    z-index: 300;
    text-align: left;
}
.ac_highlight {
    font-weight: bold;
    text-decoration: underline;
}
.ac_results ul {
    width: 100%;
    list-style-position: outside;
    list-style: none;
    padding: 0;
    margin: 0;
}
.ac_results li {
    margin: 0px;
    padding: 2px 5px;
    cursor: default;
    display: block;
    line-height: 16px;
    overflow: hidden;
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
}
.ac_loading { background: #ffffff url(http://sstatic.net/Img/progress-dots.gif) right center no-repeat }
.ac_over {
    font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;
    background-color: #ff9900;
    color: #fff;
}
.str { color: #800000 }
.kwd { color: #00008b }
.com { color: gray }
.typ { color: #2b91af }
.lit { color: #800000 }
.pun { color: #000000 }
.pln { color: #000000 }
.tag { color: #800000 }
.atn { color: #ff0000 }
.atv { color: #0000ff }
.dec { color: #800080 }
@media print { 
	.str { color: #060 }
	.kwd {
	    color: #006;
	    font-weight: bold;
	}
	.com {
	    color: #600;
	    font-style: italic;
	}
	.typ {
	    color: #404;
	    font-weight: bold;
	}
	.lit { color: #044 }
	.pun { color: #440 }
	.pln { color: #000 }
	.tag {
	    color: #006;
	    font-weight: bold;
	}
	.atn { color: #404 }
	.atv { color: #060 }
}
#wmd-button-bar {
    height: 25px;
    width: 660px;
    clear: both;
    background-color: #fff;
    margin: 10px 0px 1px 0px;
}
#wmd-input {
    width: 660px;
    padding: 3px;
    height: 200px;
    line-height: 1.2;
}
#wmd-preview {
    clear: both;
    padding: 3px;
    border: 2px dotted #ccc;
    font-size: 107%;
    line-height: 130%;
    width: 660px;
}
#wmd-preview p { word-wrap: break-word }
#wmd-button-row {
    position: relative;
    padding: 0px;
    height: 20px;
    margin: 0;
}
.wmd-spacer {
    width: 1px;
    height: 20px;
    margin-left: 14px;
    position: absolute;
    background-color: Silver;
    display: inline-block;
    list-style: none;
}
.wmd-button {
    width: 20px;
    height: 20px;
    padding-left: 2px;
    padding-right: 3px;
    position: absolute;
    display: inline-block;
    list-style: none;
    cursor: pointer;
}
.wmd-button>span {
    background-image: url(Img/wmd-buttons.png);
    background-repeat: no-repeat;
    background-position: 0px 0px;
    width: 20px;
    height: 20px;
    display: inline-block;
}
#wmd-button-bar #wmd-spacer1 { left: 50px }
#wmd-button-bar #wmd-spacer2 { left: 175px }
#wmd-button-bar #wmd-spacer3 { left: 300px }
.wmd-prompt-background { background-color: Black }
.wmd-prompt-dialog {
    border-right: 3px solid #999999;
    border-bottom: 3px solid #999999;
    border-top: 3px solid #fff;
    border-left: 3px solid #fff;
    background-color: #ddd;
}
.wmd-mini-button,
.wmd-mini-button:visited {
    width: 60px;
    padding: 3px 8px;
    text-decoration: none;
    margin: 5px 5px 5px 5px;
    color: #444;
}
.wmd-mini-button:hover,
.wmd-mini-button.selected {
    text-decoration: none;
    -moz-border-radius: 15px;
    -webkit-border-radius: 15px;
    border-radius: 15px;
    background-color: #ccc;
}
.wmd-mini-button.selected:hover,
.wmd-mini-button.selected {
    color: #eee;
    background-color: #888;
}
@media print { 
	#sidebar,
	#nav,
	#tabs,
	#footer,
	#hmenus,
	#hlinks,
	.post-menu,
	.post-comments,
	.notify,
	form,
	div.vote { display: none }
}
#recent-badges td {
    vertical-align: baseline;
    height: 32px;
    width: 244px;
    overflow: hidden;
    white-space: nowrap;
}
#hlogo a,
.envelope-on,
.envelope-off,
.vote-up-off,
.vote-up-on,
.vote-down-off,
.vote-down-on,
.star-on,
.star-off,
.comment-up-off,
.comment-up-on,
.flag-off,
.flag-on,
.edited-yes,
a.cc-wiki-link,
.feed-icon,
.statsarrow,
.vote-accepted-off,
.vote-accepted-on,
.vote-accepted-bounty,
.badge-earned-check,
.delete-tag,
.delete-tag-hover,
.grippie,
.expander-arrow-hide,
.expander-arrow-show,
.expander-arrow-small-hide,
.expander-arrow-small-show,
.anonymous-gravatar,
.badge1,
.badge2,
.badge3,
.add-interesting-tag-on,
.add-interesting-tag-off {
    background-image: url(images/sprites.png?v=3);
    background-repeat: no-repeat;
    overflow: hidden;
}
#hlogo a {
    width: 250px;
    height: 61px;
    display: block;
    background-position: 0px 0px;
    text-indent: -999999em;
    float: left;
}
.envelope-off,
.envelope-on {
    background-position: 0px -805px;
    display: inline-block;
    width: 15px;
    height: 10px;
    vertical-align: middle !ie7;
    margin-right: 3px !ie7;
    font-size: 500px !ie7;
}
.envelope-on { background-position: 0px -785px }
.vote-up-off,
.vote-up-on,
.vote-down-off,
.vote-down-on,
.star-on,
.star-off {
    background-position: 0px -265px;
    display: block;
    margin: 0 auto;
    width: 41px;
    height: 25px;
}
.vote-up-off,
.vote-down-off,
.vote-accepted-off,
.star-off,
.comment-up-off,
.flag-off { cursor: pointer }
.vote-up-off,
.vote-up-on,
.vote-down-off,
.vote-down-on,
.star-on,
.star-off,
.comment-up-off,
.comment-up-on,
.comment-flag,
.flag-off,
.vote-accepted-off,
.vote-accepted-on {
    text-indent: -9999em;
    font-size: 1px;
}
.vote-up-on { background-position: 0px -230px }
.vote-down-off { background-position: 0px -300px }
.vote-down-on { background-position: 0px -330px }
.star-off,
.star-on {
    background-position: 0px -150px;
    width: 33px;
    height: 31px;
}
.star-on { background-position: 0px -190px }
.comment-up-off,
.comment-up-on,
.flag-off,
.flag-on,
.edited-yes {
    display: inline-block;
    height: 14px;
    width: 14px;
    vertical-align: text-bottom;
    line-height: 12px;
}
.comment-up-off { background-position: 0px -410px }
.comment-up-on { background-position: 0px -390px }
.flag-off { background-position: 0px -740px }
.flag-on { background-position: 0px -715px }
.edited-yes { background-position: 0px -640px }
.delete-tag,
.delete-tag-hover {
    vertical-align: top;
    margin-top: 3px;
    background-position: 0px -690px;
    width: 14px;
    height: 14px;
    display: inline-block;
}
.delete-tag-hover {
    background-position: 0px -665px;
    cursor: pointer;
}
#interestingTags .delete-tag,
#interestingTags .delete-tag-hover,
#ignoredTags .delete-tag,
#ignoredTags .delete-tag-hover {
    margin-top: 7px;
    margin-left: 2px;
}
.badge-earned-check {
    background-position: 0px -609px;
    width: 20px;
    height: 23px;
    display: inline-block;
}
.vote-accepted-off,
.vote-accepted-on,
.vote-accepted-bounty {
    background-position: 0px -560px;
    width: 39px;
    height: 40px;
    display: block;
    margin: 0 auto;
}
.vote-accepted-on { background-position: 0px -460px }
.vote-accepted-bounty { background-position: 0px -510px }
#footer-flair {
    width: 130px;
    text-align: right;
    float: right;
    font-size: 90%;
}
#footer-flair a {
    display: inline-block;
    vertical-align: top;
    text-indent: -999999em;
}
a.cc-wiki-link {
    width: 50px;
    height: 67px;
    background-position: 0px -70px;
}
span.feed-icon {
    background-position: 0px -840px;
    display: inline-block;
    width: 18px;
    height: 14px;
    text-decoration: none;
    vertical-align: middle;
    background-color: #fff;
}
.statsarrow {
    float: right;
    height: 13px;
    width: 7px;
    margin-top: 12px;
    background-position: 0px -435px;
}
.grippie {
    background-position: 321px -823px;
    border: 1px solid #ddd;
    border-width: 0pt 1px 1px;
    cursor: s-resize;
    height: 9px;
    overflow: hidden;
    background-color: #eee;
    margin-right: -8px !important;
}
.expander-arrow-hide,
.expander-arrow-show {
    display: inline-block;
    width: 27px;
    height: 21px;
    background-position: 5px -870px;
}
.expander-arrow-show { background-position: 5px -905px }
.expander-arrow-small-hide,
.expander-arrow-small-show {
    display: inline-block;
    width: 15px;
    height: 16px;
    background-position: 0px -935px;
}
.expander-arrow-small-show { background-position: 0px -960px }
.anonymous-gravatar {
    display: inline-block;
    width: 32px;
    height: 32px;
    background-position: 0px -990px;
}
.badge1,
.badge2,
.badge3 {
    display: inline-block;
    width: 6px;
    height: 11px;
    overflow: hidden;
    line-height: inherit;
    background-position: -40px -1034px;
    vertical-align: text-bottom;
    margin: 0 1px 1px 3px;
}
.badge2 { background-position: -20px -1034px }
.badge3 { background-position: 0px -1034px }
.lastactivity-link {
    color: inherit;
    background-color: transparent;
}
.add-interesting-tag-on {
    background-position: 0px -1059px;
    display: inline-block;
    width: 14px;
    height: 14px;
}
.add-interesting-tag-off {
    display: inline-block;
    background-position: 0px -1045px;
    width: 14px;
    height: 14px;
}
#tag-menu {
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: 1px solid #1c1c1c;
    border-top: 1px solid #444444;
    background-color: #333;
    color: #e3e3e3;
    text-align: left;
    font-size: 12px;
    padding: 10px;
    width: 248px;
    -moz-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5),inset 0 1px 0px #727272;
    -webkit-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5),inset 0 1px 0px #727272;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5),inset 0 1px 0px #727272;
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    z-index: 320;
}
#tag-menu .tm-heading {
    color: #fff;
    font-weight: bold;
    border-bottom: 1px solid #727272;
    padding-bottom: 8px;
    margin-bottom: 8px;
}
#tag-menu .tm-description {
    line-height: 13px;
    font-size: 11px;
    margin-bottom: 8px;
}
#tag-menu .tm-description p { margin-bottom: 8px }
#tag-menu .tm-description a,
#tag-menu .tm-description a:visited { color: #b4d4ec }
#tag-menu .tm-favorite-on {
    color: #fdca5c;
    font-size: 13px;
    text-decoration: none;
}
#tag-menu .tm-favorite-off {
    color: #bbbbbb;
    font-size: 13px;
    text-decoration: none;
}
#tag-menu .tm-sub-links a,
#tag-menu .tm-sub-links a:visited {
    font-weight: normal;
    color: #ff9933;
    text-decoration: none;
}
#tag-menu .tm-sub-links a:hover { color: #faaf65 }
#tag-menu .tm-links { color: #727272 }
#tag-menu .tm-links a,
#tag-menu .tm-links a:visited {
    color: #b4d4ec;
    font-size: 11px;
    text-decoration: none;
    margin-right: 8px;
}
#tag-menu .tm-links a:hover { color: #dcecf7 }
#portalLink {
    margin-left: -6px;
    float: left;
    margin-top: 6px;
}
.mainbar-captcha { width: 610px !important }
.sidebar-captcha { width: 350px !important }
.content-tag { margin-top: 15px!important }
#adzerk1 { height: 90px }
a.genu {
    background: url('images/sprites.png?v=3') no-repeat -55px -66px;
    display: block;
    width: 120px;
    height: 18px;
    text-indent: -999em;
    outline: none;
    font-size: 1px;
    float: left;
}
div#seWrapper {
    width: 360px;
    background-color: #fefefe;
    border: 1px solid #aaa;
    border-top: none;
    padding: 0;
    font-family: Arial,Helvetica,sans-serif;
    -moz-box-shadow: 4px 4px 7px #ababab;
    -webkit-box-shadow: 4px 4px 7px #ababab;
    box-shadow: 4px 4px 7px #ababab;
    z-index: 999;
    top: 31px!important;
}
#seWrapper .seIntro {
    font-size: 11px;
    line-height: 12px;
    padding: 5px;
    color: #fff;
    background: #aaa;
}
#seWrapper .seIntro a,
#seWrapper .seIntro a:visited {
    color: #fff!important;
    text-decoration: underline;
}
#seWrapper .seNav,
#seWrapper .seFooter {
    width: 350px;
    padding: 5px;
}
#seWrapper .seNav {
    background-color: #f2f2f2;
    font-size: 12px;
}
#seWrapper .seNavLinks {
    list-style: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
#seWrapper .seNavLinks li {
    float: left;
    font-size: 11px;
    text-transform: lowercase;
    margin: 0 15px 0 0;
    line-height: 14px;
}
#seWrapper .seNavLinks li a {
    text-decoration: none;
    color: #707070;
    display: block;
    padding: 2px 8px;
    -moz-border-radius: 15px;
    -webkit-border-radius: 15px;
    border-radius: 15px;
}
ul.seNavLinks li a.seCurrent,
ul.seNavLinks li a.seCurrent:hover,
ul.seNavLinks li a.seCurrent:visited {
    color: #fff!important;
    background-color: #bbb;
}
ul.seNavLinks li a:hover,
ul.seNavLinks li a:focus { background-color: #dfdfdf }
#seWrapper .seContainer {
    overflow-y: auto;
    padding: 0;
    width: 360px;
    height: 240px;
}
#seWrapper .seFooter {
    background-color: #aaa;
    text-align: right;
    font-size: 10px;
}
#seWrapper .seFooter a { color: #fff }
.seNumAnswer,
.seNumAnswer:visited {
    display: block;
    float: left;
    width: 24px;
    height: 24px;
    text-decoration: none;
    font-size: 10px;
    color: #888!important;
    text-align: center;
    line-height: 16px;
    padding: 0;
    margin: 0 5px 5px 0;
}
.siteFavicon {
    display: block;
    float: left;
    width: 24px;
    height: 24px;
    margin: 0 5px 5px 0;
    font-size: 9px;
    text-align: center;
    border-color: #F4F4F4 #F2F2F2 #E0E0E0;
    border-style: solid;
    border-width: 1px;
}
.siteFavicon img {
    border: none;
    margin-top: 4px;
}
#seWrapper .itemBox {
    border-bottom: 1px solid #F3F3F3;
    float: left;
    margin: 3px 3px 0;
    padding: 3px 4px;
}
#seWrapper .itemBoxNew { background-color: #ffffe2 }
#seWrapper .siteInfo {
    float: left;
    width: 290px;
    font-size: 11px;
    color: #888;
}
#seWrapper .siteInfo a {
    font-size: 11px;
    text-decoration: none;
    font-weight: bold;
    color: #444;
}
#seWrapper .siteInfo p {
    margin: 0 0 2px 0;
    line-height: 12px;
}
#seWrapper .siteLink {
    font-size: 9px !important;
    text-decoration: none;
    font-weight: normal!important;
    margin-bottom: 4px;
    display: inline-block;
}
#seWrapper .siteInfo a:hover { color: #888 }
.siteLinkFavicon {
    display: block;
    float: left;
    text-decoration: none;
    margin: 0 6px 2px 2px;
}
.siteLinkFavicon img {
    width: 16px;
    height: 16px;
    border: none;
}
.unreadCount:hover { text-decoration: none }
.unreadCount {
    font-family: Arial,Helvetica,sans-serif;
    display: block;
    float: left;
    background-color: #e23535;
    color: #fff;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    padding: 2px 4px;
    font-size: 9px;
    margin: 3px 0 0 -117px;
}
.unreadCountTab {
    font-family: Arial,Helvetica,sans-serif;
    background-color: #e23535;
    color: #fff;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    padding: 2px 5px;
    font-size: 8px;
    margin: 0 4px 0 -4px;
}

.popup-submit { float: right }
.popup-cancel { float: left }
.popup-close { position: absolute }
.popup-close a {
    position: relative;
    left: -34px;
    top: -35px;
    padding: 0px 7px;
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    background-color: #000;
    -moz-box-shadow: 2px 2px 5px #666666;
    -webkit-box-shadow: 2px 2px 5px #666666;
    box-shadow: 2px 2px 5px #666666;
    -moz-border-radius: 25px;
    -webkit-border-radius: 25px;
    border-radius: 25px;
}
.popup-close a:hover { text-decoration: none }
.popup .subheader { margin-bottom: 10px !important }
.popup-tab-content { clear: both }
.action-list {
    margin-left: 5px !important;
    margin-right: 5px;
    margin-bottom: 10px;
}
.action-list>li { width: 650px }
.action-list li {
    list-style-type: none;
    padding: 2px 4px;
}
.action-list .action-name,
.action-list .action-desc { cursor: pointer }
.action-list .action-name {
    font-weight: bold;
    font-size: 105%;
}
.action-list .action-desc {
    display: block;
    color: #666;
    line-height: 115%;
    margin: 6px 0 10px 18px;
}
.action-list .action-disabled span {
    color: #999;
    font-weight: normal;
    cursor: default !important;
}
.action-list .action-selected { background-color: #f3f3f3 }
.action-list .action-subform {
    display: none;
    margin: 15px auto;
    width: 535px;
}
.action-list .action-subform .wide { width: 400px }
.action-list h4 { margin-bottom: 5px }
.close-offtopic-sites td { vertical-align: middle }
.wide-tag-col { width: 230px }
#tags-table .answer-votes {
    margin-right: 5px;
    width: 25px;
    margin-top: 2px;
    display: inline-block;
    float: none;
}
#overlay-header {
    border-bottom: 1px solid black;
    opacity: 0;
    display: none;
    background: rgba(255, 255, 255, 0.949219);
    font-size: 20px;
    font-weight: bold;
    left: 0px;
    padding-top: 5px;
    padding-bottom: 10px;
    padding-right: 10%;
    padding-left: 10%;
    position: fixed;
    top: 0px;
    width: 80%;
    z-index: 250;
    -moz-box-shadow: 0px 1px 15px #9c9c9c;
    -webkit-box-shadow: 0px 1px 15px #9c9c9c;
    box-shadow: 0px 1px 15px #9c9c9c;
}
#overlay-header .close-overlay {
    color: #999;
    cursor: pointer;
    font-size: 10px;
    font-weight: normal;
}
.mod-post-actions {
    padding: 2px;
    line-height: 20px;
}
.bounty-indicator-tab.flagbg { background-color: red !important }
#ad502-rooms { width: 212px }
.ad502-room {
    position: relative;
    padding: 5px;
    overflow: hidden;
    background: #fdfdfd;
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-top: 1px solid #ddd;
    border-left: 1px solid #ddd;
    -moz-box-shadow: 0px 1px 3px #dddddd;
    -webkit-box-shadow: 0px 1px 3px #dddddd;
    box-shadow: 0px 1px 3px #dddddd;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    margin-top: 5px;
}
.ad502-room-title {
    font-size: 14px;
    font-family: Verdana,Arial,sans-serif;
}
.ad502-last-message {
    font-family: Verdana,Arial,sans-serif;
    font-size: 0.8em;
    color: #A0A0A0;
}
.ad502-users { margin-top: 4px }
.ad502-room-h3 { margin-bottom: 1px }
.new-blog-post {
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background-color: #E23535;
    color: #FFFFFF;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 10px;
    margin: 0;
    padding: 0 5px 1px;
}
.timeline-answers { color: #555 }
.answer-votes { cursor: pointer }
.answer-votes.large {
    font-size: 90%;
    padding-top: 7px;
    padding-bottom: 2px;
}
.answer-votes.extra-large {
    font-size: 90%;
    padding-top: 7px;
    padding-bottom: 2px;
    width: 32px;
}
.quality-score {
    font-size: 80%;
    margin-right: 10px;
}
.answer-summary.question-style .statscontainer { width: 86px }
.answer-summary.question-style .summary { width: 630px }
.answer-summary .statscontainer { width: 40px }
.answer-summary .summary { width: 670px }
.answer-summary .post-menu,
.question-summary .post-menu { margin-top: 12px }
.answer-summary.question-summary .answer-votes {
    font-size: 120%;
    width: auto;
    padding: 8px 8px 6px;
    margin-right: 5px;
}
.answer-summary.question-summary .answer-votes.large {
    font-size: 110%;
    width: auto;
    padding: 8px 4px 6px;
    margin-right: 5px;
}
.answer-summary.question-summary .answer-votes.extra-large {
    font-size: 100%;
    width: auto;
    padding: 6px 4px 4px;
    margin-right: 5px;
}
.answer-summary.question-summary .vote-info {
    margin-top: 5px;
    float: right;
}
.answer-summary.question-summary .answer-link {
    width: 550px;
    display: block;
    padding: 0;
    float: none;
}
#synonyms-table { margin-top: 20px }
#synonyms-table th {
    width: 250px;
    padding-bottom: 10px;
}
#synonyms-table td {
    padding-bottom: 5px;
    line-height: 18px;
}
#synonyms-table .rename-count { width: 100px }
#synonyms-table td.pending { color: #777 }
#synonyms-table td .dim .item-multiplier { color: #777 }
#synonyms-table th .arrow {
    margin-right: 30px;
    font-size: 20px;
    line-height: 12px;
}
.subtabs.filters.tag-synonyms { width: auto }
.top-count {
    color: #808185;
    font-size: 300%;
    font-weight: bold;
}
.top-count a { color: #808185 }
.popup .question-summary { border: 0 }
table.full-diff td { border: solid 4px white }
.revision-comment.blur { color: #999 }
.suggested-edit { width: 960px }
.suggested-edit .summary { width: 910px }
.suggested-edit .score {
    display: block;
    background: #EEE;
    padding: 8px 8px 6px;
    color: #555;
    font-size: 120%;
    font-weight: bold;
    margin-bottom: 30px;
    text-decoration: none;
    text-align: center;
    width: 15px;
}
.suggested-edit .revision {
    display: block;
    margin-bottom: 8px;
}
.suggested-edit .revision-comment { padding-right: 8px }
.suggested-edit input { cursor: pointer }
.suggested-edit .options .action span {
    text-indent: -9000px;
    display: block;
}
.suggested-edit .options a.action {
    width: 22px;
    height: 22px;
    display: block;
    border: 1px solid white;
    background-position: center;
    background-repeat: no-repeat;
    margin-bottom: 8px;
}
.suggested-edit .options a.action:active,
.suggested-edit .options a.action:focus { outline: none }
.suggested-edit .options a.action.full-diff { background-image: url(../Img/diff-icons/full-diff.png) }
.suggested-edit .options a.action.full-html-diff { background-image: url(../Img/diff-icons/full-html-diff.png) }
.suggested-edit .options a.action.link { background-image: url(../Img/diff-icons/link.png) }
.suggested-edit .options a.action.selected,
.suggested-edit .options a.action.selected:hover {
    border: 1px solid #ccc;
    background-color: #eee;
}
.suggested-edit .options a.action:hover {
    border: 1px solid #ddd;
    background-color: #e4e4e4;
}
.suggested-edit .body-diffs { margin-top: 18px }
.suggested-edit .body-diffs td { vertical-align: top }
.suggested-edit .body-diffs .full-diff { display: none }
.suggested-edit .body-diffs .full-diff td { margin-right: 5px }
.suggested-edit .body-diffs .full-diff td.content {
    width: 435px;
    max-width: 435px;
    word-wrap: break-word;
}
.suggested-edit .body-diffs .full-diff .deleted { background-color: #fff4f4 }
.suggested-edit .body-diffs .full-diff .inserted { background-color: #f9ffe1 }
.suggested-edit .body-diffs .full-diff .skip {
    text-align: center;
    padding: 10px;
    background-color: #efefef;
}
.suggested-edit .body-diffs .full-html-diff .post-text {
    width: 445px;
    max-width: 445px;
    word-wrap: break-word;
}
.suggested-edit .body-diffs .full-html-diff .post-text img { max-width: 440px }
.suggested-edit .body-diffs .full-html-diff .gutter {
    width: 10px;
    max-width: 10x;
}
.suggested-edit .body-diffs .full-html-diff th {
    color: #9a9a9a;
    padding: 6px 0 4px;
}
.suggested-edit .user-info-actions { width: 900px }
.suggested-edit .user-info-actions .started { float: none !important }
.suggested-edit .user-info-actions .current-owner { width: 445px }
.suggested-edit .user-info-actions .gutter { width: 7px }
.suggested-edit .user-info-actions .actions { text-align: right }
.suggested-edit .user-info-actions .form-error {
    padding: 15px 0 5px 0;
    display: none;
}
.popup-suggested-edit {
    overflow: auto;
    width: 990px;
}
#lightbox,
.lightbox {
    display: none;
    background: #000;
    opacity: 0.7;
    filter: alpha(opacity=70);
    position: absolute;
    top: 0px;
    left: 0px;
    min-width: 100%;
    z-index: 1000;
}
#lightbox-panel {
    display: none;
    z-index: 1001;
    border: 0 !important;
}
.share-answer .fb-share,
.share-answer .twitter-share {
    display: inline-block !important;
    margin: 0;
    vertical-align: middle;
}
.share-answer a { margin-right: 5px }

.share-answer a:hover { text-decoration: none }
.share-answer a:hover .share-name { text-decoration: underline }
.comment-help,
.answer-help-background {
    background-color: #FEFAE2;
    border: 1px solid #F3EED5;
}
.comment-help {
    margin-top: 5px;
    padding: 5px;
    width: 465px;
}
.comment-help,
.answer-help { color: black }
.answer-help-background {
    position: absolute;
    left: -5px;
    padding: 0 5px;
}
.mod-flag-indicator {
    display: inline-block;
    padding: 0px 4px;
    font-size: 90%;
    font-weight: bold;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
}
#tabs .mod-flag-indicator { margin-left: -4px }
table.flagged-posts tr.messageDivider>td {
    border-top: 1px solid #aaaaaa;
    padding: 10px 5px 10px 5px;
}
table.flagged-posts tr.messageDivider>td>div,
table.flagged-posts tr.messageDivider>td>div>div,
table.flagged-posts tr.messageDivider>td>div>div>div {
    padding-top: 0;
    padding-bottom: 3px;
}
table.flagged-posts tr.messageDivider>td div.mod-audit-user-info { padding: 3px }
table.flagged-posts .delete-options>input:hover { cursor: pointer }
table.flagged-posts .mod-message td { padding: 4px 5px 4px 5px }
table.flagged-posts tr.messageDivider:hover { opacity: 1 }
table.flagged-posts tr.loaded-body>td { border-top: 1px dotted #aaaaaa }
table.flagged-posts .comments .flagcell {
    width: 28px;
    text-align: center;
}
table.flagged-posts .comments tr.message-divider>td { padding-top: 4px }
table.flagged-posts .comments .bounty-indicator-tab { margin-right: 0 }
table.flagged-posts .comments .comment-score span { padding-right: 0 }
table.flagged-posts tr.messageDivider:first-child>td,
table.flagged-posts tr.loaded-body>td:empty { border-top: 0px none transparent }
table.flagged-posts .answer-summary { padding-left: 0 }
table.flagged-posts .answer-link { margin-top: 0 }
table.flagged-posts .bounty-indicator-tab {
    line-height: 17px;
    margin-left: 0;
}
table.flagged-posts td.messageTime { width: 100px }
table.flagged-posts .relativetime {
    color: #888;
    font-weight: normal;
}
table.flagged-posts .relativetime.old { color: black }
table.flagged-posts .delete-tag:hover {
    background-position: 0px -665px;
    cursor: pointer;
}
table.flagged-posts .flag-issue { vertical-align: top }
table.flagged-posts td.flag-issue { padding-left: 0 }
table.flagged-posts div.flag-issue { text-align: left }
table.flagged-posts .popup { background: white }
table.flagged-posts .post-text { width: auto }
table.flagged-posts div.post-header .answer-link { width: 450px }
table.flagged-posts .answer-votes.large,
table.flagged-posts .answer-votes.default {
    padding-bottom: 3px;
    padding-top: 2px;
}
table.flagged-posts .fullhide { display: none }
table.flagged-posts .delete-options {
    float: right;
    padding-right: 10px;
}
table.flagged-posts .dismiss-options { float: left }
table.flagged-posts .dismiss-options,
table.flagged-posts .post-options {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
table.flagged-posts .expand-body { cursor: pointer }
table.flagged-posts .spacer { clear: left }
table.flagged-posts .mod-audit {
    float: right;
    width: 185px;
}
table.flagged-posts .mod-audit .mod-post-actions {
    display: inline-block;
    width: 185px;
}
table.flagged-posts .mod-post-actions {
    background-color: Maroon;
    color: White;
}
table.flagged-posts .mod-message { line-height: 17px }
table.flagged-posts .mod-message,
table.flagged-posts div.post-header,
table.flagged-posts div.post-summary,
table.flagged-posts .mod-post-header {
    width: 520px;
    display: inline-block;
    word-wrap: break-word;
}
table.flagged-posts .mod-post-header {
    margin: 0;
    padding: 0 0 8px 0;
}
#postflag-bar {
    z-index: 5;
    position: fixed;
    left: 0px;
    bottom: 0px;
    top: auto;
    min-height: 40px;
    width: 100%;
    border-top: 2px solid #aaaaaa;
    background-color: #eeeeee;
    opacity: 0.90;
}
#postflag-bar .flag-wrapper {
    padding-bottom: 5px;
    padding-top: 5px;
    width: 735px;
    margin-left: auto;
    margin-right: auto;
}
#postflag-bar:hover { opacity: 1.0 }
#postflag-bar .nav-button {
    background-color: #777777;
    position: absolute;
}
#postflag-bar .nav-button.prev,
#postflag-bar .nav-button.next {
    min-height: 40px;
    padding: 2px;
    top: 0px;
    bottom: 0px;
    width: 20px;
    font-size: 20px;
}
#postflag-bar .nav-button.prev {
    left: 0px;
    border-right: 1px solid #aaaaaa;
    text-align: right;
}
#postflag-bar .nav-button.next {
    right: 0px;
    border-left: 1px solid #aaaaaa;
    text-align: left;
}
#postflag-bar .nav-button.close {
    right: 40px;
    top: 15px;
    padding: 2px 5px 5px 5px;
    border: 1px solid #aaaaaa;
    -moz-border-radius: 25px;
    -webkit-border-radius: 25px;
    border-radius: 25px;
}
#postflag-bar .nav-button a { color: White }
#postflag-bar .nav-button a:visited { color: White }
#postflag-bar .nav-button a:hover { text-decoration: none }
#postflag-bar .nav-button:hover { background-color: White }
#postflag-bar .nav-button:hover a { color: #777777 }
div.form-field-error.form-error {
    font-size: 12px;
    display: block;
    margin-top: -15px;
}
.profile-triangle,
.profile-triangle-on {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 17px;
    padding-right: 5px;
    color: #808080;
    cursor: pointer;
    line-height: 0!important;
}
.profile-popup {
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    margin-top: 3px;
    display: block;
    padding: 5px;
    position: absolute;
    font-size: 12px;
    z-index: 500;
    -moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}
.profile-popup a,
.profile-popup a:visited {
    font-weight: normal!important;
    text-shadow: none!important;
}
.profile-popup a:hover { text-decoration: none!important }
.profile-popup .profile-gravatar {
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 2px solid #ccc;
    overflow: hidden;
}
.profile-popup .profile-gravatar img {
    width: 32px;
    height: 32px;
    margin-right: 10px;
    vertical-align: middle;
    float: left;
}
.profile-popup .profile-name {
    font-size: 16px;
    font-weight: bold;
}
.profile-popup .profile-links {
    display: block;
    float: left;
    margin: 5px 0 0 0;
    font-size: 12px;
    padding: 3px 0;
}
.profile-popup .profile-links li {
    display: block;
    float: left;
    margin-right: 10px;
}
.profile-popup .profile-stats .recent-rep-wrapper { margin-top: 10px }
.profile-popup .profile-stats table {
    width: 100%;
    color: #444;
}
.profile-popup .profile-stats table .profile-table-col1 { width: 70px }
.profile-popup .profile-stats table .profile-table-rep-col1 { width: 40px }
.profile-popup .profile-stats table .profile-overflow {
    width: 330px;
    white-space: nowrap;
    overflow: hidden;
}
.profile-popup .profile-stats table .question-hyperlink,
.profile-popup .profile-stats table .answer-hyperlink { font-size: 100% }
.profile-popup .profile-stats table.profile-recent-summary thead tr { border-bottom: 1px solid #eee }
.profile-popup .profile-stats table.profile-recent-summary td,
.profile-popup .profile-stats table.profile-recent-summary th {
    padding-right: 10px;
    width: 80px;
}
.profile-popup .profile-stats table.profile-recent-summary .repchange {
    font-size: 10px;
    font-weight: bold;
    margin-left: 5px;
}
.profile-popup .profile-stats table.profile-recent-summary th.profile-table-col1 { width: 100px }
.profile-popup .profile-footer {
    font-size: 11px;
    margin-top: 10px;
    text-align: right;
}
.profile-popup .profile-footer .popup-clock {
    float: left;
    color: #aaa;
    font-style: italic;
}
.profile-popup .profile-link-on { background-color: #FFFFFF }
.itemMoreContainer {
    text-align: center;
    float: left;
    width: 100%;
}
#wmd-help-button.active-help {
    background-color: #F3EED5;
    height: 30px;
    padding-left: 3px;
}
#mdhelp {
    background-color: #FEFAE2;
    position: absolute;
    right: 0;
    width: 630px;
    color: Black;
}
#mdhelp-tabs {
    background-color: #F3EED5;
    list-style-type: none;
    margin: 0;
    padding: 3px 0 0 3px;
}
#mdhelp-tabs li {
    display: inline-block;
    padding: 3px 6px 6px;
    margin: 0 2px;
    cursor: pointer;
}
#mdhelp-tabs li.selected { background-color: #FEFAE2 }
.mdhelp-tab {
    padding: 10px;
    display: none;
    line-height: 1.2;
}
.mdhelp-tab .spaces { background-color: white }
.mdhelp-tab .col1,
.mdhelp-tab .col2 { width: 48% }
.mdhelp-tab .col1 { float: left }
.mdhelp-tab .col2 { float: right }
.votes-cast-stats {
    margin-top: 10px;
    font-size: 16px;
    line-height: 20px;
}
.votes-cast-stats th {
    color: #333;
    padding-bottom: 5px;
}
.votes-cast-stats th.spacer { width: 40px }
.votes-cast-stats td {
    font-weight: bold;
    color: #666;
    vertical-align: middle;
    text-align: right;
}
.votes-cast-stats td.span { text-align: left }
.votes-cast-stats td.desc {
    font-size: 10px;
    color: #444;
    padding-left: 6px;
    text-align: left;
}
#profileactivity {
line-height: 1.9em;
font-style: italic;
font-family: Georgia, "Times New Roman", Times, serif;
color: #444444;
border-width: 1px;
background-image: url(images/background.gif);
background-repeat: no-repeat;
width:95%;
}
#response {
background-color: #efe5d0;
width: 95%;
padding: 15px;
vertical-align: top;
}
</style>