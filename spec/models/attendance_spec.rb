require 'rails_helper'

RSpec.describe Attendance, type: :model do
    
  let(:animal) { build(:animal, name: 'Costelinha' \
                              , age: 8 \
                              , specie: "Cachorro" \
                              , breed: "Vira-Lata") }
                                
  let(:vet) { build(:vet, name: "Ricardo Mattos" \
                        , phone: "(16)993828987" \
                        , crv: "010-9321.9823-121" \
                        , address: "Rua Batista Gandin - 90, Jd. Paulista - São Paulo") }
  
  it { is_expected.to validate_presence_of(:dt) }
  it { is_expected.to validate_presence_of(:animal) }
  it { is_expected.to validate_presence_of(:vet) }
  it { is_expected.to validate_presence_of(:obs) }
  
  context "validates attendance" do
      
    # dt  
    it { is_expected.to allow_value("2018-04-06").for(:dt) }    
    it { is_expected.not_to allow_value("").for(:dt) }
    
    # animal
    it { is_expected.to allow_value(animal).for(:animal) }    
    it { is_expected.not_to allow_value(nil).for(:animal) }
    
    # vet
    it { is_expected.to allow_value(vet).for(:vet) }    
    it { is_expected.not_to allow_value(nil).for(:vet) }
    
    # obs
    it { is_expected.to allow_value("teste").for(:obs) }    
    it { is_expected.not_to allow_value("").for(:obs) }
      
  end
  
end
