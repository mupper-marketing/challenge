require 'rails_helper'

RSpec.describe Vet, type: :model do
  
  it { is_expected.to validate_presence_of(:name) }
  it { is_expected.to validate_presence_of(:phone) }
  it { is_expected.to validate_presence_of(:crv) }
  it { is_expected.to validate_presence_of(:address) }
  
  context "validates vet" do
      
      # name
      it { is_expected.to allow_value("Bruna Santana").for(:name) }
      it { is_expected.not_to allow_value("").for(:name) }
      
      # phone
      it { is_expected.to allow_value("(016)93848493").for(:phone) }
      it { is_expected.not_to allow_value("").for(:phone) }
      
      # crv
      it { is_expected.to allow_value("039.32132.321-1").for(:crv) }
      it { is_expected.not_to allow_value("").for(:crv) }
      
      # address
      it { is_expected.to allow_value("Rua Correa - 90, Centro - São Paulo").for(:address) }
      it { is_expected.not_to allow_value("").for(:address) }
      
  end
  
end
