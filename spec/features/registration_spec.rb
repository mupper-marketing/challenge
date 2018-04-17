require 'rails_helper'

RSpec.describe "Registration", type: :feature do
  
  scenario 'user registration and sign in' do
      
      visit root_path
      
      click_on "Signup"
      
      fill_in 'user[first_name]',   with: 'Ricardo'
      fill_in 'user[last_name]',    with: 'Mattos'
      fill_in 'user[email]',        with: 'ricardo.svmtts@gmail.com'
      fill_in 'user[password]',     with: '123456'
      
      click_on "Save"
      
      expect(page).to have_text "ricardo.svmtts@gmail.com"
      expect(page).to have_text "Log out"
      
  end
  
end
