<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::orderBy('id', 'DESC')->where('status', 'YES')->get();

        return view('frontend.home', $data);
    }

    public function showShopPage()
    {
        return view('frontend.pages.shop_page');
    }

    public function showFaqPage()
    {
        return view('frontend.pages.faq');
    }

    public function showOurMissionPage()
    {
        return view('frontend.pages.our_mission');
    }

    public function showTermsAndConditionPage()
    {
        return view('frontend.pages.terms_condition');
    }

    public function showPrivacyPage()
    {
        return view('frontend.pages.privacy');
    }

    public function showAboutUsPage()
    {
        return view('frontend.pages.about_us');
    }

    public function showContactUsPage()
    {
        return view('frontend.pages.contact_us');
    }

    public function show404NotFoundPage()
    {
        return view('frontend.pages.404NotFound');
    }

    public function showAllCategoryPage()
    {
        $categories = Category::orderBy('id', 'DESC')->where('status', 'YES')->get();

        return view('frontend.pages.category', compact('categories'));
    }

    public function showBrandListPage()
    {
        $brands = Category::orderBy('id', 'DESC')->where('status', 'YES')->get();

        return view('frontend.pages.brand', compact('brands'));
    }
}
