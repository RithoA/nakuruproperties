<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
 'uses' => 'PageController@getHome',
 'as'  => 'pg.home'
    ]);

Route::post('/get/commentcount', [
 'uses' => 'CommentsController@getComment',
 'as'  => 'cm.getcomments'
    ]);

Route::get('verifyemail/{email}/{verifyToken}', [
 'uses' => 'EmailsController@verifyEmail',
 'as'  => 'em.verifyemail'
    ]);

Route::get('unsubscribeemail/{email}', [
 'uses' => 'EmailsController@unsubscribeEmail',
 'as'  => 'em.unsubscribeemail'
    ]);

Route::get('subscribeemail/{email}', [
 'uses' => 'EmailsController@subscribeEmail',
 'as'  => 'em.subscribeemail'
    ]);

Route::post('/send/message', [
 'uses' => 'EmailsController@postSendMessage',
 'as'  => 'em.sendmessage'
    ]);
Route::get('/recent/{id}', 'FeedsController@getRecent');

Route::get('/prime/{id', 'FeedsController@getPrime');

Route::get('/suggestion/{id}', 'FeedsController@getSuggestion');

Route::post('favorite/{post}', 'PostsController@favoritePost');

Route::post('unfavorite/{post}', 'PostsController@unFavoritePost');

Route::get('my_favorites', 'ProfilesController@myFavorites');

Route::get('/results', [
 'uses' => 'PageController@getResults',
 'as'  => 'pg.results'
	]);

Route::get('/SignIn', [
 'uses' => 'PageController@getLogin',
 'as'  => 'pg.login'
	]);

Route::get('/SignUp', [
 'uses' => 'PageController@getRegisteruser',
 'as'  => 'pg.registeruser'
	]);

Route::get('/property/{slug}', [
 'uses' => 'PostsController@getViewpost',
 'as'  => 'ps.viewpost'
    ]);

Route::get('/viewUserProfile', [
 'uses' => 'PageController@getViewuserprofile',
 'as'  => 'pg.viewuserprofile'
    ]);


Route::get('/get/categories', [
        'uses' => 'CategoriesController@getCategories',
        'as' => 'getcategories'
    ]);


Route::get('/get/tags', [
        'uses' => 'CategoriesController@getTags',
        'as' => 'gettags'
    ]);

Route::get('/get/towns', [
        'uses' => 'CategoriesController@getTowns',
        'as' => 'gettowns'
    ]);

Route::get('/search', [
 'uses' => 'SearchController@filter',
 'as'  => 'sr.search'
    ]);

Route::get('/NakuruProperties', [
 'uses' => 'ProfilesController@getViewprofile',
 'as'  => 'pr.viewprofile'
    ]);

Route::get('/newpost/location/{id}', [
        'uses' => 'CategoriesController@gettownLocations',
        'as' => 'gettownlocations'
    ]);

////////////////////Guests

Route::group(['middleware' => 'auth'], function(){

Route::post('/uncomment/{id}', [
 'uses' => 'CommentsController@removeComment',
 'as'  => 'cm.removecomments'
    ]);

Route::post('/deleteable/{id}', [
 'uses' => 'CommentsController@Deleteable',
 'as'  => 'cm.deleteable'
    ]);

Route::post('/requestverifyemail', [
 'uses' => 'EmailsController@requestverifyEmail',
 'as'  => 'em.reqemver'
    ]);

Route::post('/resetpassword', [
 'uses' => 'UsersController@resetPassword',
 'as'  => 'rs.resetpassword'
    ]);

Route::get('/my/home', [
 'uses' => 'ProfilesController@getUserhome',
 'as'  => 'pr.userhome'
    ]);

Route::get('/Property/{slug}', [
 'uses' => 'PostsController@getUserViewpost',
 'as'  => 'ps.userviewpost'
    ]);

Route::get('/my/favorites', [
 'uses' => 'ProfilesController@getUserfavorites',
 'as'  => 'pr.userfavorites'
    ]);

Route::get('/my/profile', [
 'uses' => 'ProfilesController@getUserprofile',
 'as'  => 'pr.userprofile'
    ]);

Route::get('/edit/my/profile', [
 'uses' => 'ProfilesController@getEditUserprofile',
 'as'  => 'pr.edituserprofile'
    ]);

Route::get('/search/results', [
 'uses' => 'PageController@getResults',
 'as'  => 'pg.userresults'
    ]);

Route::post('/update/avatar', [
 'uses' => 'ProfilesController@postAvatar',
 'as'  => 'pr.updateavatar'
    ]);

Route::post('/update/coverimage', [
 'uses' => 'ProfilesController@postCoverimage',
 'as'  => 'pr.updatecoverimage'
    ]);

Route::post('/update/profile', [
 'uses' => 'ProfilesController@postProfile',
 'as'  => 'pr.updateprofile'
    ]);

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{

Route::get('admin/property/{slug}', [
 'uses' => 'PostsController@getadminViewpost',
 'as'  => 'ps.adminviewpost'
    ]);

Route::get('/admin/favorites', [
 'uses' => 'ProfilesController@getAdminfavorites',
 'as'  => 'pr.myfavorites'
    ]);

Route::get('/admin/profile', [
 'uses' => 'ProfilesController@getAdminprofile',
 'as'  => 'pr.adminprofile'
	]);

Route::get('/edit/admin/profile', [
 'uses' => 'ProfilesController@getEditAdminprofile',
 'as'  => 'pr.editadminprofile'
	]);

Route::get('/admin/home', [
 'uses' => 'ProfilesController@getAdminhome',
 'as'  => 'pr.adminhome'
	]);

Route::get('/admin/results', [
 'uses' => 'PageController@getResults',
 'as'  => 'pg.adminresults'
    ]);

Route::get('/users', [
 'uses' => 'ProfilesController@getListusers',
 'as'  => 'pr.listusers'
	]);

Route::get('/categories', [
 'uses' => 'ProfilesController@getListcategories',
 'as'  => 'pr.listcategories'
    ]);

Route::get('/tags', [
 'uses' => 'ProfilesController@getListtags',
 'as'  => 'pr.listtags'
    ]);

Route::get('/owners', [
 'uses' => 'ProfilesController@getListowners',
 'as'  => 'pr.listowners'
    ]);

Route::get('/locations', [
 'uses' => 'ProfilesController@getListlocations',
 'as'  => 'pr.listlocations'
    ]);

Route::get('/towns', [
 'uses' => 'ProfilesController@getListTowns',
 'as'  => 'pr.listtowns'
    ]);

Route::get('/list/businesses', [
 'uses' => 'ProfilesController@getListbusinesses',
 'as'  => 'pr.listbusinesses'
	]);

Route::get('/list/followers', [
 'uses' => 'ProfilesController@getListfollowers',
 'as'  => 'pr.listfollowers'
	]);

Route::get('/list/following', [
 'uses' => 'ProfilesController@getListfollowing',
 'as'  => 'pr.listfollowing'
	]);

//////////////////////////////////////////////////////////////POSTS
Route::get('/posts', [
 'uses' => 'ProfilesController@getListposts',
 'as'  => 'pr.listposts'
	]);

Route::get('/new/post', [
 'uses' => 'ProfilesController@getNewpost',
 'as'  => 'pr.newpost'
    ]);

Route::post('/deletepost', [
 'uses' => 'PostsController@postDeletepost',
 'as'  => 'ps.deletepost'
    ]);

Route::post('/editpost', [
 'uses' => 'PostsController@postEditpost',
 'as'  => 'ps.editpost'
    ]);
/////////////////////////////////////////////////////Categories
Route::get('/new/category', [
 'uses' => 'ProfilesController@getNewcategory',
 'as'  => 'pr.newcategory'
    ]);

Route::post('/deletecategory', [
 'uses' => 'CategoriesController@postDeletecategory',
 'as'  => 'ct.deletecategory'
    ]);

Route::post('/editcategory', [
 'uses' => 'CategoriesController@postEditcategory',
 'as'  => 'ct.editcategory'
    ]);

Route::post('/create/category', [
 'uses' => 'CategoriesController@postCreatecategory',
 'as'  => 'ct.createcategory'
    ]);



////////////////////////////////////////////////////////////Locations


Route::post('/deletelocation', [
 'uses' => 'CategoriesController@postDeletelocation',
 'as'  => 'loc.deletelocation'
    ]);

Route::post('/editlocation', [
 'uses' => 'CategoriesController@postEditlocation',
 'as'  => 'loc.editlocation'
    ]);

Route::post('/create/location', [
 'uses' => 'CategoriesController@postCreatelocation',
 'as'  => 'loc.createlocation'
    ]);

////////////////////////////////////////////////////////////Locations


Route::post('/deletetown', [
 'uses' => 'CategoriesController@postDeletetown',
 'as'  => 'twn.deletetown'
    ]);

Route::post('/edittown', [
 'uses' => 'CategoriesController@postEdittown',
 'as'  => 'twn.edittown'
    ]);

Route::post('/create/town', [
 'uses' => 'CategoriesController@postCreatetown',
 'as'  => 'twn.createtown'
    ]);
//////////////////////////////////////////////////////////Promos

Route::get('/new/promo', [
 'uses' => 'ProfilesController@getNewpromo',
 'as'  => 'pr.newpromo'
    ]);


//////////////////////////////////////////////////////////Emails

Route::get('/new/email', [
 'uses' => 'ProfilesController@getNewemail',
 'as'  => 'pr.newemail'
    ]);

Route::post('/new/email', [
 'uses' => 'EmailsController@postNewemail',
 'as'  => 'em.newemail'
    ]);

Route::get('/subscribers', [
 'uses' => 'ProfilesController@getListsubscribers',
 'as'  => 'pr.listsubscribers'
    ]);

Route::post('/deletesubscriber', [
 'uses' => 'EmailsController@postDeletesubscriber',
 'as'  => 'em.deletesubscriber'
    ]);

Route::post('/editsubscriber', [
 'uses' => 'EmailsController@postEditsubscriber',
 'as'  => 'em.editsubscriber'
    ]);

/////////////////////////////////////////////////////////Adverts

Route::get('/new/advert', [
 'uses' => 'ProfilesController@getNewadvert',
 'as'  => 'pr.newadvert'
    ]);

Route::get('/adverts', [
 'uses' => 'ProfilesController@getListadverts',
 'as'  => 'pr.listadverts'
    ]);

Route::post('/deleteadvert', [
 'uses' => 'AdvertsController@postDeleteadvert',
 'as'  => 'ad.deleteadvert'
    ]);

Route::post('/editadvert', [
 'uses' => 'AdvertsController@postEditadvert',
 'as'  => 'ad.editadvert'
    ]);

/////////////////////////////////////////////////////////Users
Route::get('/new/user', [
 'uses' => 'ProfilesController@getNewuser',
 'as'  => 'pr.newuser'
    ]);

Route::post('/edituser', [
 'uses' => 'UsersController@postEdituser',
 'as'  => 'ps.edituser'
    ]);

Route::post('/deleteuser', [
 'uses' => 'UsersController@postDeleteuser',
 'as'  => 'ps.deleteuser'
    ]);

Route::get('/view/user/{id}', [
 'uses' => 'ProfilesController@getViewuser',
 'as'  => 'pr.viewuser'
    ]);

Route::get('/edit/user/{id}', [
 'uses' => 'ProfilesController@getEdituser',
 'as'  => 'pr.edituser'
    ]);

Route::get('/delete/user/{id}', [
 'uses' => 'ProfilesController@getDeleteuser',
 'as'  => 'pr.deleteuser'
    ]);
///////////////////////////////////////////////////////Tags


Route::post('/create/tag', [
 'uses' => 'CategoriesController@postCreatetag',
 'as'  => 'tg.createtag'
    ]);

Route::post('/deletetag', [
 'uses' => 'CategoriesController@postDeletetag',
 'as'  => 'tg.deletetag'
    ]);

Route::post('/edittag', [
 'uses' => 'CategoriesController@postEdittag',
 'as'  => 'tg.edittag'
    ]);


//////////////////////////////////////////////////////////Owners

Route::post('/create/owner', [
 'uses' => 'CategoriesController@postCreateowner',
 'as'  => 'ow.createowner'
    ]);

Route::post('/deleteowner', [
 'uses' => 'CategoriesController@postDeleteowner',
 'as'  => 'ow.deleteowner'
    ]);

Route::post('/editowner', [
 'uses' => 'CategoriesController@postEditowner',
 'as'  => 'ow.editowner'
    ]);


//////////////////////////////////////////////////////////

Route::get('/new/email', [
 'uses' => 'ProfilesController@getNewemail',
 'as'  => 'pr.newemail'
    ]);

Route::post('/create/photo', [
 'uses' => 'PostsController@postCreatephoto',
 'as'  => 'ps.createphoto'
	]);

Route::post('/create/post', [
 'uses' => 'PostsController@postCreatepost',
 'as'  => 'ps.createpost'
    ]);



Route::post('/create/promo', [
 'uses' => 'PromosController@postCreatepromo',
 'as'  => 'pm.createpromo'
    ]);

Route::post('/create/advert', [
 'uses' => 'AdvertsController@postCreateadvert',
 'as'  => 'ad.createadvert'
    ]);

Route::post('/create/user', [
 'uses' => 'UsersController@postCreateuser',
 'as'  => 'us.createuser'
    ]);

Route::get('/search/results', [
 'uses' => 'PageController@getUserresults',
 'as'  => 'pr.userresults'
	]);

});///////////////User_Type Admin


Route::get('/check_following_status/{id}', [
        'uses' => 'FriendshipsController@check_following',
        'as' => 'check_following'
    ]);

Route::get('/check_followingbiz_status/{id}', [
        'uses' => 'FriendshipsController@check_followingbiz',
        'as' => 'check_followingbiz'
    ]);

Route::get('/check_follower_status/{id}', [
        'uses' => 'FriendshipsController@check_follower',
        'as' => 'check_follower'
    ]);

Route::get('/add_friend/{id}', [
        'uses' => 'FriendshipsController@add_friend',
        'as' => 'add_friend'
    ]);

Route::get('/accept_friend/{id}', [
        'uses' => 'FriendshipsController@accept_friend',
        'as' => 'accept_friend'
    ]);

Route::get('/add_business/{id}', [
        'uses' => 'FriendshipsController@add_business',
        'as' => 'add_business'
    ]);

Route::get('/feed', [
        'uses' => 'FeedsController@feed',
        'as' => 'feed'
    ]);

Route::get('/myfeed', [
        'uses' => 'FeedsController@myfeed',
        'as' => 'myfeed'
    ]);

Route::get('/get_auth_user_data', function(){
        return Auth::user();
    });

Route::get('/like/{id}', [
        'uses' => 'LikesController@like'
    ]);

Route::get('/unlike/{id}', [
        'uses' => 'LikesController@unlike'
    ]);

});////////Authenticated

Auth::routes();
