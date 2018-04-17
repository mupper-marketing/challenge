require 'rails_helper'

RSpec.describe Donation, type: :model do
  
  it { is_expected.to validate_presence_of(:donor) }
  it { is_expected.to validate_presence_of(:donation_type) }
  it { is_expected.to validate_presence_of(:quantity) }
  
  context "validates donation" do
      
      # donor
      it { is_expected.to allow_value("Max Rações").for(:donor) }
      it { is_expected.not_to allow_value("").for(:donor) }
      
      # donation_type
      it { is_expected.to allow_value("Ração").for(:donation_type) }
      it { is_expected.not_to allow_value("").for(:donation_type) }
      
      # quantity
      it { is_expected.to allow_value("Gato").for(:quantity) }
      it { is_expected.not_to allow_value("").for(:quantity) }

  end
  
end
