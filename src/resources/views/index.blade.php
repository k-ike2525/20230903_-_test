@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <font color="red">※</font>
          </div>
          <div class="form__parent_group-content">
             <div class="form__input--text_name">
              <input type="text" name="fullname" placeholder="例）テスト" value="{{ old('fullname') }}" />
               <input type="text"  name="fullname" placeholder="例）太郎" value="{{ old('fullname') }}" />
             </div>
        <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
              @error('fullname')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <font color="#f10707">※</font>
          </div>
          <div class="form__group-content">
    <input type="radio" name="gender" value="male" checked/>男性
    <input type="radio" name="gender" value="male" />女性
           <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <font color="#f10707">※</font>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
               @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <font color="#f10707">※</font>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <label>〒</label>
                <input type="text" name="postcode" placeholder="09012345678" value="{{ old('postcode') }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
               @error('postcode')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所 </span>
            <font color="#f10707">※</font>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例) 東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building_name" placeholder="例) 千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <font color="#f10707">※</font>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="opinion" ></textarea>
            </div>
                        <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
               @error('opinion')
              {{ $message }}
              @enderror
           </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
  @endsection