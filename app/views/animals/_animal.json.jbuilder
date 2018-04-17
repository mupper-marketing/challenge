json.extract! animal, :id, :name, :age, :specie, :breed, :obs, :created_at, :updated_at
json.url animal_url(animal, format: :json)
