require 'rails_helper'

RSpec.describe Admin, type: :model do
  
  it { is_expected.to validate_presence_of(:name) }
  it { is_expected.to validate_presence_of(:email) }
  
  context "validates admin" do
      
      # name
      it { is_expected.to allow_value("Felipe Braga").for(:name) }
      it { is_expected.not_to allow_value("").for(:name) }
      
      # email
      it { is_expected.to allow_value("Felipe Braga").for(:email) }
      it { is_expected.not_to allow_value("").for(:email) }
      
  end
  
end
