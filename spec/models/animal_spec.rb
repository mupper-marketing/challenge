require 'rails_helper'
require 'shoulda/matchers'

RSpec.describe Animal, type: :model do
  
  it { is_expected.to validate_presence_of(:name) }
  it { is_expected.to validate_presence_of(:specie) }
  it { is_expected.to validate_presence_of(:age) }
  it { is_expected.to validate_presence_of(:breed) }
  
  context "validates animal" do
      # name
      it { is_expected.to allow_value("Costelinha").for(:name) }
      it { is_expected.to allow_value("Lana").for(:name) }
      it { is_expected.not_to allow_value("").for(:name) }
      
      # age
      it { is_expected.to allow_value(12).for(:age) }
      it { is_expected.not_to allow_value("").for(:age) }
      
      # specie
      it { is_expected.to allow_value("Gato").for(:specie) }
      it { is_expected.not_to allow_value("").for(:specie) }
      
      # breed
      it { is_expected.to allow_value("Angora").for(:breed) }
      it { is_expected.not_to allow_value("").for(:breed) }
  end
  
  it "returns animal attendancies" do
      animal = build(:animal \
                    , name: "Costelinha", age: 12 \
                    , specie: "Cachorro" \
                    , breed: "Vira-Lata")
      
      animal.valid?
      expect(animal.getAttendance).to eq(Attendance.where(:animal => animal))
  end

  
end
