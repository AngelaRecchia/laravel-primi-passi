<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'title' => "Hello World",
        's1' => "Food",
        's2' => "Wine",
        's3' => "Fragrance",
        's4' => "Coffee"
    ];
    return view('home', $data);
});   

Route::get('/food', function () {
    $data = [
        'title' => "Food",
        'p' => ['Natural foods and \'all-natural foods\' are widely used terms in food labeling and marketing with a variety of definitions, most of which are vague. The term is often assumed to imply foods that are not processed and whose ingredients are all natural products (in the chemist\'s sense of that term), thus conveying an appeal to nature. But the lack of standards in most jurisdictions means that the term assures nothing. In some countries, the term \'natural\' is defined and enforced. In others, such as the United States, it is not enforced.',
        'The international Food and Agriculture Organization’s Codex Alimentarius does not recognize the term \'natural\' but does have a standard for organic foods.']
    ];
    return view('food', $data);
})->name('food');

Route::get('/wine', function () {
    $data = [
        'title' => "Wine",
        'p' => ['The earliest remains of Apadana Palace in Persepolis dating back to 515 BC include carvings depicting soldiers from Achaemenid Empire subject nations bringing gifts to the Achaemenid king, among them Armenians bringing their famous wine.',
        'Literary references to wine are abundant in Homer (8th century BC, but possibly relating earlier compositions), Alkman (7th century BC), and others.']
    ];
    return view('wine', $data);
})->name('wine');

Route::get('/fragrance', function () {
    $data = [
        'title' => "Fragrance",
        'p' => ['Generally, molecules meeting this specification have molecular weights of less than 310.',
        'Aroma compounds can be found in various foods, such as fruits and their peels, wine, spices, floral scent, perfumes, fragrance oils, and essential oils. For example, many form biochemically during the ripening of fruits and other crops.',
        'Animals that are capable of smell detect aroma compounds with their olfactory receptors. Olfactory receptors are cell-membrane receptors on the surface of sensory neurons in the olfactory system that detect airborne aroma compounds. Aroma compounds can then be identified by gas chromatography-olfactometry, which involves a human operator sniffing the GC effluent.']
    ];
    return view('fragrance', $data);
})->name('fragrance');

Route::get('/coffee', function () {
    $data = [
        'title' => "Coffee",
        'p' => ['Beans from different countries or regions can usually be distinguished by differences in flavor, aroma, body, and acidity. Varietals are generally known by the region in which they are grown, such as Colombian, Java and Kona.',
         'Arabica coffee beans are cultivated mainly in Latin America, eastern Africa or Asia, while robusta beans are grown in central Africa, throughout southeast Asia, and Brazil.']
    ];
    return view('coffee', $data);
})->name('coffee');
