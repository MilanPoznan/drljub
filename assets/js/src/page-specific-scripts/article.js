// import imgToBackground from '../common/img-to-background';
//
// const imgToBg = imgToBackground( jQuery );
//
// const $report = jQuery('.article__report-title');
// const $reportContent = jQuery('.article__report-content');
// const $singleReport = jQuery('.article__single-report');
// var isReportOpen = false;
// /**
//     Page loaded calls
// **/
// jQuery( window ).load( ( $ ) => {
//
//     imgToBg.makeImgBackground( '.js-cover-image', '.js-cover-background' );
//     imgToBg.makeImgBackground( '.js-related-post-image', '.js-related-post-background' );
//
//     window.fbAsyncInit = function() {
//        FB.init({
//          appId            : '1434868006628476',
//          autoLogAppEvents : true,
//          xfbml            : true,
//          version          : 'v2.10'
//        });
//        FB.AppEvents.logPageView();
//      };
//
//      (function(d, s, id){
//         var js, fjs = d.getElementsByTagName(s)[0];
//         if (d.getElementById(id)) {return;}
//         js = d.createElement(s); js.id = id;
//         js.src = "//connect.facebook.net/en_US/sdk.js";
//         fjs.parentNode.insertBefore(js, fjs);
//       }(document, 'script', 'facebook-jssdk'));
// });
//
//
// //Report section
// function showReport() {
//     console.log('2');
//     jQuery(this).find($reportContent).show('slow');
//
// }
// jQuery($report).on('click', function() {
//     console.log('1');
//     showReport();
// });
