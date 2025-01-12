@extends('layouts.app')

@section('tittle')
    Store Cart Page
@endsection

@section('content')
<div class="page-content page-cart" style="margin-top: 100px">
    <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
    >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Cart
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="store-cart">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 table-responsive">
                    <table class="table table-borderless table-cart">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name &amp; Seller</th>
                                <th scope="col">Price</th>
                                <th scope="col">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 25%">
                                    <img
                                        src="images/product-cart-1.jpg"
                                        alt=""
                                        class="cart-image"
                                    />
                                </td>
                                <td style="width: 35%">
                                    <div class="product-title">
                                        Sofa Ternyaman
                                    </div>
                                    <div class="product-subtitle">
                                        by Andi Sukka
                                    </div>
                                </td>
                                <td style="width: 35%">
                                    <div class="product-title">
                                        $29,112
                                    </div>
                                    <div class="product-subtitle">
                                        IDR
                                    </div>
                                </td>
                                <td style="width: 20%">
                                    <a
                                        href="#"
                                        class="btn btn-remove-cart"
                                    >
                                        Remove
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">
                                    <img
                                        src="images/product-cart-2.jpg"
                                        alt=""
                                        class="cart-image"
                                    />
                                </td>
                                <td style="width: 35%">
                                    <div class="product-title">
                                        Sneaker
                                    </div>
                                    <div class="product-subtitle">
                                        by True to Skin
                                    </div>
                                </td>
                                <td style="width: 35%">
                                    <div class="product-title">
                                        $80,309
                                    </div>
                                    <div class="product-subtitle">
                                        USD
                                    </div>
                                </td>
                                <td style="width: 25%">
                                    <a
                                        href="#"
                                        class="btn btn-remove-cart"
                                    >
                                        Remove
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">
                                    <img
                                        src="images/product-cart-3.jpg"
                                        alt=""
                                        class="cart-image"
                                    />
                                </td>
                                <td style="width: 25%">
                                    <div class="product-title">
                                        Coffee Holder
                                    </div>
                                    <div class="product-subtitle">
                                        by Addictex
                                    </div>
                                </td>
                                <td style="width: 25%">
                                    <div class="product-title">
                                        $13,492
                                    </div>
                                    <div class="product-subtitle">
                                        USD
                                    </div>
                                </td>
                                <td style="width: 25%">
                                    <a
                                        href="#"
                                        class="btn btn-remove-cart"
                                    >
                                        Remove
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                    <hr />
                </div>
                <div class="col-12">
                    <h2 class="mb-4">Shipping Details</h2>
                </div>
            </div>
            <div
                class="row mb-2"
                data-aos="fade-up"
                data-aos-delay="200"
            >
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressOne">Address 1</label>
                        <input
                            type="text"
                            class="form-control"
                            id="addressOne"
                            aria-describedby="emailHelp"
                            name="addressOne"
                            value="Jl Perum Griya Kencana"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressTwo">Address 2</label>
                        <input
                            type="text"
                            class="form-control"
                            id="addressTwo"
                            aria-describedby="emailHelp"
                            name="addressTwo"
                            value="Blok AM17"
                        />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="province">Province</label>
                        <select
                            name="province"
                            id="province"
                            class="form-control"
                        >
                            <option value="West Java">West Java</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="city">City</label>
                        <select
                            name="city"
                            id="city"
                            class="form-control"
                        >
                            <option value="Jakarta">Depok</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input
                            type="text"
                            class="form-control"
                            id="postalCode"
                            name="postalCode"
                            value="16411"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input
                            type="text"
                            class="form-control"
                            id="country"
                            name="country"
                            value="Indonesia"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input
                            type="text"
                            class="form-control"
                            id="mobile"
                            name="mobile"
                            value="+628 2020 11111"
                        />
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="250">
                <div class="col-12">
                    <hr />
                </div>
                <div class="col-12">
                    <h2 class="mb-1">Payment Information</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <div class="col-md-4">
                    <div class="product-title">$29,112</div>
                    <div class="product-subtitle">Sofa Ternyaman</div>
                </div>
                <div class="col-md-4">
                    <div class="product-title">$80,309</div>
                    <div class="product-subtitle">Sneaker</div>
                </div>
                <div class="col-md-4">
                    <div class="product-title">$13,492</div>
                    <div class="product-subtitle">Coffee Holder</div>
                </div>
                <div class="col-md-4">
                    <div class="product-title text-success">
                        $122,913
                    </div>
                    <div class="product-subtitle">You Paid</div>
                </div>
                <div class="col-8">
                    <a
                        href="/success"
                        class="btn btn-success mt-4 px-4 btn-block"
                        >Checkout Now</a
                    >
                </div>
            </div>
        </div>
    </section>
</div>
@endsection